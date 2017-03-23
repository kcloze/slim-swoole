<?php

/*
 * This file is part of PHP CS Fixer.
 * (c) kcloze <pei.greet@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;
// $app->get('/{contr}/{act}[/{args:*}]', function (Request $request, Response $response, $args = []) {
//     return $this->get($args['contr'])->{$act}($request, $response, $args);
// });

$app->get('/', '\App\Controllers\DefaultController:index');
$app->get('/index', '\App\Controllers\DefaultController:index');
$app->get('/default/oop', '\App\Controllers\DefaultController:oop');
