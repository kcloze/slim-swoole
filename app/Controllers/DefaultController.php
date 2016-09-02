<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Demo;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class DefaultController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $this->container->logger->info("Slim-Skeleton '/' route");

        //Render index view
        return $this->container->renderer->render($response, 'index.phtml');
    }
    public function oop(Request $request, Response $response)
    {
        $this->container->logger->info("Slim-Skeleton '/' oop");
        var_dump('welcom to slim!');
        $demo = new Demo($this->container);
        $demo->demo();
        //var_dump($this->container->db);
        //Render index view

    }

}
