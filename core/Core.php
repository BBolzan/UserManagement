<?php

class Core
{
    public function run($routes) {
        $url = '/';
        
        if (isset($routes[$url])) {
            [$controller, $method] = explode('@', $routes[$url]);

            require_once __DIR__ . "/../controllers/$controller.php";

            $controllerInstance = new $controller();
            $controllerInstance->$method();
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
}