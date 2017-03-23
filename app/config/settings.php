<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) kcloze <pei.greet@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
    'settings' => [
        'displayErrorDetails'    => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name'  => 'slim-app',
            'path'  => __DIR__ . '/../../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        //db settings
        'db' => [
            'database_type'             => 'mysql',
            'database_name'             => 'test',
            'server'                    => '127.0.0.1',
            'username'                  => 'root',
            'password'                  => 'kcloze',
            'charset'                   => 'utf-8',
            'port'                      => '3306',
        ],
    ],
];
