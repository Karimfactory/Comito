<?php

namespace Comito;

class Kernel 
{
    private $router;

    private $templateEngine;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        $dispatcher = $this->router->setRoutes();
        $this->router->dispatching($dispatcher);
    }
}