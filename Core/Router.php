<?php
namespace Core;

use Middleware\AuthMiddleware;
use Middleware\AdminMiddleware;
use Middleware\GuestMiddleware;

class Router{

    protected $routes=[];
    private static $middlewareRegistry = [
        'auth' => \Middleware\AuthMiddleware::class,
        'guest' => \Middleware\GuestMiddleware::class,
        'admin' => \Middleware\AdminMiddleware::class,
        // Add more middleware mappings as needed
    ];
    private static function executeMiddleware($middleware)
    {
        if (isset(self::$middlewareRegistry[$middleware])) {
            $middlewareClass = self::$middlewareRegistry[$middleware];
            $middlewareClass::handle();
        } else {
            // Handle unsupported middleware
            die("Unsupported middleware: {$middleware}");
        }
    }


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

        // Find the matched route
        $matchedRoute = null;
        foreach ($this->routes as $route) {
            if ($route['uri'] === $path && $route['method'] === strtoupper($method)) {
                $matchedRoute = $route;
                break;
            }
        }

        if ($matchedRoute) {
            // Check middleware
            if (isset($matchedRoute['middleware'])) {
                $middleware = $matchedRoute['middleware'];
                switch ($middleware) {
                    case 'auth':
                        // Call AuthMiddleware
                        AuthMiddleware::handle();
                        break;
                    case 'guest':
                        // Call GuestMiddleware
                        GuestMiddleware::handle();
                        break;
                    case 'admin':
                        // Call AdminMiddleware
                        AdminMiddleware::handle();
                        break;
                        // Add other middleware cases as needed
                    default:
                        // Handle unsupported middleware
                        die("Unsupported middleware: {$middleware}");
                }
            }

            // Execute the route controller
            require BASE_PATH . $matchedRoute['controller'];
        } else {
            // Route not found
            // You can implement a 404 page or redirect as needed
            die("Route not found: {$path}");
        }
    }


    

}

?>