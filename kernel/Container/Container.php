<?php

namespace APP\Kernel\Container;

use APP\Kernel\Http\Request;
use APP\Kernel\Router\Router;
use APP\Kernel\View\View;

class Container
{
    public readonly Request $request;
    public readonly Router $router;
    public readonly View $view;

    public function __construct(){
        $this->registerServices();
    }

    private function registerServices()
    {
        $this->request = Request::createFromGlobals();
        $this->view = new View();
        $this->router = new Router($this->view);
    }
}