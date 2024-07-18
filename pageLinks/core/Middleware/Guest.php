<?php
namespace Core\Middleware ;
class Guest{
    public function handle(){
        if($_SESSION['user'] ?? false){
            header("location: /etax/Learn_PHP/pageLinks/");
            exit();
        }
    }    

}

?>