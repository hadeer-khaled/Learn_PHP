<?php 
                
    function dd($value){

        echo "<pre>" ;
        var_dump($value);
        echo "</pre>" ;
        die();
    }
    
    function urlIs($value){
        return basename($_SERVER['REQUEST_URI'] ) === $value.".php";
    }



    function base_path($path){
        return BASE_PATH . $path ;
    }
    function view($path , $attributes =[]){
        // return base_path("/views/".$path) ;

        extract($attributes);
        require base_path("/views/".$path) ;
    }
    function abort($value = 404){
        http_response_code($value);
        require view('/'.$value.'.view.php');
        die();
    }




?>