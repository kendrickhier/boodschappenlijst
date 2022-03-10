<?php

namespace App\Core;

class Router 
{
    protected $routes = [
        "GET" => [],
        "POST" => []
    ];

    public static function load($file) 
    {
        $router = new self;
        require $file;

        // Needs to return an instance of itself to make chaining possible
        return $router;
    }

    public function get($uri, $controller) 
    {
        $this->routes["GET"][$uri] = $controller;
    }

    public function post($uri, $controller) 
    {
        $this->routes["POST"][$uri] = $controller;
    }

    public function direct($uri, $methodType) 
    {
        if (array_key_exists($uri, $this->routes[$methodType])) {
            return $this->callAction(
                ...explode('@', $this->routes[$methodType][$uri])
            );
        }

        throw new Exception('No route defined for this URI.');
    }

    protected function callAction($controller, $action) 
    {     
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)) 
        {
            throw new Exception("${action} does not exist on ${controller}");
        }

        return $controller->$action();
    }
}