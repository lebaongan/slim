<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class HomeController extends BaseController
{
    public function index($request, $response, $args)
    {
        return $this->view->render($response, 'layouts/home.twig');
    }
}
