<?php

namespace Http\Forms ;

use Core\Validator ; 

class LoginForm{
    
    protected $errors= [];

    public function validate($email , $password){
        if (! Validator::string($email , 1 , 100)) {
            $errors['email'] = "Invalid Email";
        }
        if (! Validator::string($password)) {
            $errors['password'] = "password doesnot match  ";
        }
        return empty($this->errors);
    }

    public function errors(){
        return $this->errors ; 
    }


}
?>