<?php
// Routes

// $app->get('/[{name}]', function ($request, $response, $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/' route");

//     // Render index view
//     return $this->renderer->render($response, 'index.phtml', $args);
// });

//$app->get('/index', 'DefaultController:index')->setName('homepage');

$app->get('/index', '\App\Controllers\DefaultController:index');
$app->get('/oop', '\App\Controllers\DefaultController:oop');
