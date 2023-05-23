<?php

class Router {
    private $routes = [];
    private $middlewares = [];

    public function get($path, $controller, $middlewares){
        $routes['GET'] = [$path, $controller];
    }
    public function post($path, $controller, $middlewares){
        $routes['POST'] = [$path, $controller];
    }
    public function use($provided_middleware){
        $middlewares[] = $provided_middleware;
    }

    public function handle($method, $url){
        if(array_key_exists($routes[$method], $this->$routes)){

        }
    }
}