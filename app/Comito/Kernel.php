<?php

namespace Comito;

class Kernel 
{
    private $app;

    public function run()
    {
        $this->app = new Application();

        $routes = include dirname(__DIR__).'/routes.php';
        $dispatcher = $this->app->getRouter()->setRoutes($routes);
        
        $this->app->getRouter()->runRoute($dispatcher, $_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
    }

    public function getApp() 
    {
        return $this->app;
    }
}