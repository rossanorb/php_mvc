<?php

namespace Framework\Init;

abstract class Bootstrap
{
    private $route;

    function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    abstract protected function initRoutes();

    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    protected function setRoute(array $routes)
    {
        $this->route = $routes;
    }

    protected function run($url)
    {
        array_walk($this->route, function($route) use ($url) {
            if($url == $route['route']){
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        });
    }

}
