<?php

namespace APP\Kernel\Router;

use APP\Kernel\Controller\Controller;
use APP\Kernel\View\View;

class Router
{

    private array $routes = [
      'GET' => [],
      'POST' => []
    ];

    public function __construct(
        private View $view
    )
    {
        $this->initRoutes();
    }

    public function dispatch(string $uri, string $method)
    {
        $route = $this->findRoute($uri, $method);

        if(! $route){
            $this->notFound();
            exit();
        }

        if(is_array($route->getAction()))
        {
            [$controller, $action] = $route->getAction();
            /** @var Controller $controller */
            $controller = new $controller();

            call_user_func([$controller, 'setView'], $this->view);
            call_user_func([$controller, $action]);

        }else{
            $route->getAction()();
        }

    }

    private function initRoutes()
    {
        $routes = $this->getRoutes();

        foreach ($routes as $route){
            $this->routes[$route->getMethod()][$route->getUri()] = $route;
        }
    }

    /**
     * @return Route[]
     */

    private function notFound()
    {
        echo "404 | page not found";
    }

    private function findRoute(string $uri, string $method): Route|false
    {
        if (!isset($this->routes[$method][$uri])) return false;

        return $this->routes[$method][$uri];
    }

    private function getRoutes()
    {
        return require_once APP_PATH . "/config/routes.php";
    }
}