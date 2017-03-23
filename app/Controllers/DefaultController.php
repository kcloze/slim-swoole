<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) kcloze <pei.greet@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App\Controllers;

use App\Library\XUtils;
use App\Models\Tutorial;
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
        XUtils::p('welcom to slim!');
        $demo = new Tutorial($this->container);
        $demo->demo();
        //var_dump($this->container->db);
        //Render index view
    }
}
