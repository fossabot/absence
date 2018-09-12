<?php
require '../vendor/autoload.php';
$app = new Slim\App();
$app->get('/', function ($request, $response) {
    return $response->getBody()->write("Welcome to Absence");
});
$app->run();
