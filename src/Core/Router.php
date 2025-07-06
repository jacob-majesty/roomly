<?php
namespace App\Core;

class Router
{
    private $routes = [];

    public function add($method, $path, $controllerAction)
    {
        $this->routes[$method][$path] = $controllerAction;
    }

    public function dispatch($method, $uri)
    {
        foreach ($this->routes[$method] ?? [] as $path => $controllerAction) {
            if ($path === $uri) {
                [$controller, $action] = explode('@', $controllerAction);
                $controller = "App\\Controllers\\{$controller}";
                (new $controller())->$action();
                return;
            }
        }
        http_response_code(404);
        echo "404 Not Found";
    }
}