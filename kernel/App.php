<?php

namespace APP\Kernel;

use APP\Kernel\Container\Container;
use APP\Kernel\Http\Request;
use APP\Kernel\Router\Router;

class App
{
    private Container $container;

    public function  __construct()
    {
        $this->container = new Container();
    }

    public function run()
    {
        $this->container->router->dispatch(
            $this->container->request->uri(),
            $this->container->request->method()
        );
    }
}