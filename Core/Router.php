<?php
namespace Core;

use Middleware\AuthMiddleware;
use Middleware\GuestMiddleware;

class Router{

    protected $routes=[];


    public function add ($method,$uri,$controller){
        $this->routes[]=[
            'uri'=>$uri,
            'controller'=>$controller,
            'method'=>$method

        ];
        return $this;
    }
    public function middleware($uri, $middleware)
    {
        foreach ($this->routes as &$route) {
            if ($route['uri'] === $uri) {
                $route['middleware'] = $middleware;
                break;
            }
        }
        return $this;
    }

    public function get($uri,$controller){
       return  $this->add('GET',$uri,$controller);
    }

    public function post($uri,$controller){
       return  $this->add('POST', $uri, $controller);
    }

    public function delete($uri,$controller){
       return  $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri,$controller){
       return  $this->add('PATCH', $uri, $controller);
    }

    public function put($uri,$controller){
       return  $this->add('PUT', $uri, $controller);
    }

    public function only($key){
        $this->routes[array_key_last($this->routes)]['middleware']=$key;
         
        

        return $this;
    }


    public function route($uri, $method)
    {
        // Extract the URI path without query parameters
        $parsedUrl = parse_url($uri);
        $path = $parsedUrl['path'];


        foreach ($this->routes as $route) {
            if ($route['uri'] === $path && $route['method'] === strtoupper($method)) {
                // Check middleware
                if (isset($route['middleware'])) {
                    // Execute middleware logic here
                    if ($route['middleware'] === 'auth') {
                        // Call AuthMiddleware
                        \Middleware\AuthMiddleware::handle();
                    } elseif ($route['middleware'] === 'guest') {
                        // Call GuestMiddleware
                        \Middleware\GuestMiddleware::handle();
                    } elseif ($route['middleware'] === 'admin') {
                        // Call AdminMiddleware
                        \Middleware\AdminMiddleware::handle();
                    }
                }

                // If no middleware or middleware check passed, execute the route
                require BASE_PATH . $route['controller'];
                return;
            }
        }
    }
    

}

?>