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

    function login($user){

        session_start();

        $_SESSION['user']= [ "email"=> $user['email']];
    }

    function logout(){


        $_SESSION= [];
        session_destroy();
        $params = session_get_cookie_params();
        setcookie("PHPSESSID",'' , time()-3600 , $params['path'], $params['domain'], $params['secure'], $params['httponly']);
    }




?>