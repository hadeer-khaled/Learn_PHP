<?php
namespace Core ;
use Core\Middleware\Auth ;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;
class Router{
    
    protected $routes = [] ;

    public function get($uri , $controller){

        $this->routes[] = [
                "uri"=>$uri ,
                "controller"=>$controller,
                "method"=> "GET",
                "middleware"=> null
        ];
        return $this ; 
    }
    public function post($uri , $controller){

        $this->routes[] = [
                "uri"=>$uri ,
                "controller"=>$controller,
                "method"=> "POST",
                "middleware"=> null

        ];
        return $this ; 

    }
    public function patch($uri , $controller){

        $this->routes[] = [
                "uri"=>$uri ,
                "controller"=>$controller,
                "method"=> "PATCH",
                "middleware"=> null

        ];
        return $this ; 

    }
    public function put($uri , $controller){

        $this->routes[] = [
                "uri"=>$uri ,
                "controller"=>$controller,
                "method"=> "PUT",
                "middleware"=> null

        ];
        return $this ; 

    }
    public function delete($uri , $controller){

        $this->routes[] = [
                "uri"=>$uri ,
                "controller"=>$controller,
                "method"=> "DELETE",
                "middleware"=> null

        ];
        return $this ; 

    }


    public function only($key){
         $this->routes[array_key_last($this->routes)]['middleware']=$key ; 
        // dd( $this->routes);
        return $this ;
    }
    public function route($uri , $method){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        foreach($this->routes as $route){
            if($route['uri'] === $uri && $route['method'] === $method ){

                if($route['middleware']){
                   $middleware = Middleware::MAP[$route['middleware']] ;
                   (new  $middleware  )->handle();
                }

                return require base_path($route['controller']);
            }
        }
        abort(404);
    }


}
?>