<?php
namespace Core;
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

                // if($route['middleware']=='guest'){
                //     if($_SESSION['user_id']?? false){
                //         header('location: /');
                //         exit();
                //     }
                // }


                // if($route['middleware']=='auth'){
                //     if(!$_SESSION['user_id']??false){
                //         header('location: /login');
                //     }
                // }

                require BASE_PATH . $route['controller'];
                return;
            }
        }

        
    }
    

}

?>