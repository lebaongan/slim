<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function showSignupForm($request, $response, $args)
    {
        return $this->view->render($response, 'auth/signup.twig');
    }

    public function signup($request, $response, $args)
    {
        
    }
}
