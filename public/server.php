<?php

class HttpServer
{
    public static $instance;

    public $http;
    public static $get;
    public static $post;
    public static $header;
    public static $server;
    private $application;
    public $response = null;

    public function __construct()
    {
        $http = new swoole_http_server("0.0.0.0", 9501);

        $http->set(
            array(
                'worker_num'    => 5,
                'daemonize'     => false,
                'max_request'   => 10,
                'dispatch_mode' => 1,
            )
        );

        $http->on('WorkerStart', array($this, 'onWorkerStart'));

        $http->on('request', function ($request, $response) {
            //捕获异常
            register_shutdown_function(array($this, 'handleFatal'));
            //请求过滤
            if ($request->server['path_info'] == '/favicon.ico' || $request->server['request_uri'] == '/favicon.ico') {
                return $response->end();
            }
            $this->response = $response;
            if (isset($request->server)) {
                HttpServer::$server = $request->server;
                foreach ($request->server as $key => $value) {
                    $_SERVER[strtoupper($key)] = $value;
                }
            }
            if (isset($request->header)) {
                HttpServer::$header = $request->header;
            }
            if (isset($request->get)) {
                HttpServer::$get = $request->get;
                foreach ($request->get as $key => $value) {
                    $_GET[$key] = $value;
                }
            }
            if (isset($request->post)) {
                HttpServer::$post = $request->post;
                foreach ($request->post as $key => $value) {
                    $_POST[$key] = $value;
                }
            }
            ob_start();
            //实例化slim对象
            try {
                $settings = require __DIR__ . '/../app/config/settings.php';
                $app      = new \Slim\App($settings);
                // Set up dependencies
                require __DIR__ . '/../app/config/dependencies.php';
                // Register middleware
                require __DIR__ . '/../app/config/middleware.php';
                // Register routes
                require __DIR__ . '/../app/config/routes.php';
                // Run app
                $app->run();
            } catch (Exception $e) {
                var_dump($e);
            }
            $result = ob_get_contents();
            ob_end_clean();
            $response->end($result);
            unset($result);
            unset($app);
        });

        $http->start();
    }
    /**
     * Fatal Error的捕获
     *
     */
    public function handleFatal()
    {
        $error = error_get_last();
        if (!isset($error['type'])) {
            return;
        }

        switch ($error['type']) {
            case E_ERROR:
            case E_PARSE:
            case E_DEPRECATED:
            case E_CORE_ERROR:
            case E_COMPILE_ERROR:
                break;
            default:
                return;
        }
        $message = $error['message'];
        $file    = $error['file'];
        $line    = $error['line'];
        $log     = "\n异常提示：$message ($file:$line)\nStack trace:\n";
        $trace   = debug_backtrace(1);

        foreach ($trace as $i => $t) {
            if (!isset($t['file'])) {
                $t['file'] = 'unknown';
            }
            if (!isset($t['line'])) {
                $t['line'] = 0;
            }
            if (!isset($t['function'])) {
                $t['function'] = 'unknown';
            }
            $log .= "#$i {$t['file']}({$t['line']}): ";
            if (isset($t['object']) && is_object($t['object'])) {
                $log .= get_class($t['object']) . '->';
            }
            $log .= "{$t['function']}()\n";
        }
        if (isset($_SERVER['REQUEST_URI'])) {
            $log .= '[QUERY] ' . $_SERVER['REQUEST_URI'];
        }

        if ($this->response) {
            $this->response->status(500);
            $this->response->end($log);
        }

        unset($this->response);
    }
    public function onWorkerStart()
    {
        require __DIR__ . '/../vendor/autoload.php';
        session_start();

    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new HttpServer;
        }
        return self::$instance;
    }

}

HttpServer::getInstance();
