<?php
namespace Core ;
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

                if($route['middleware'] === "guest"){
                    // dd($_SESSION['user'] );
                    var_dump($_SESSION);
                    if($_SESSION['user'] ?? false){
                        header("location: /etax/Learn_PHP/pageLinks/");
                        exit();
                    }
                }
                if($route['middleware'] === "auth"){
                    if(! $_SESSION['user'] ?? false){
                        header("location: /etax/Learn_PHP/pageLinks/");
                        exit();
                    }
                }

                return require base_path($route['controller']);
            }
        }
        abort(404);
    }


}
?>