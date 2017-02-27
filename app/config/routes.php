<?php

/*
 * This file is part of slim-swoole.
 *
 * (c) kcloze <pei.greet@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

$app->get('/', '\App\Controllers\DefaultController:index');
$app->get('/index', '\App\Controllers\DefaultController:index');
$app->get('/oop', '\App\Controllers\DefaultController:oop');
