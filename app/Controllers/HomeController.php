<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index($request, $response, $args)
    {
        var_dump(config('database.driver'));
        die;

        return $this->view->render($response, 'layouts/app.twig');
    }
}
