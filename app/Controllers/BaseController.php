<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;

class BaseController
{
    protected $container;
    protected $view;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->view = $container->get('view');
    }

    public function index($request, $response, $args)
    {
        return $response;
    }
}
