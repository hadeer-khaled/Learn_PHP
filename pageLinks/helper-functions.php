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

    function abort($value = 404){
        http_response_code($value);
        require 'views/'.$value.'.view.php';
        die();
    }

    function base_path($path){
        return BASE_PATH . $path ;
    }




?>