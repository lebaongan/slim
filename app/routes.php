<?php

$app->get('/', \App\Controller\HomeController::class . ':index');

// Auth
$app->get('/signup', \App\Controllers\Auth\AuthController::class . ':showSignupForm');
