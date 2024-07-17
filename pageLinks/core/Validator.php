<?php 
namespace Core ; 

class Validator{
    public static function string($value , $min = 1 , $max = INF){
            return strlen(trim($value)) >= $min && strlen(trim($value)) <=$max ;
    }
}

?>