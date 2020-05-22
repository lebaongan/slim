<?php

use DI\Container;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Illuminate\Database\Capsule\Manager as Capsule;

session_start();

require __DIR__ . '/../vendor/autoload.php';

// DoEnv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Create container
$container = new Container();
AppFactory::setContainer($container);

// Set view in Container
$container->set('view', function () {
    return Twig::create(__DIR__ . '/../resources/views', ['cache' => false]);
});

// Create app
$app = AppFactory::create();

// Add Twig-View Middleware
$app->add(TwigMiddleware::createFromContainer($app));

require __DIR__ . '/../app/routes.php';
