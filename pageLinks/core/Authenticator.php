<?php
namespace Core ;
class Authenticator{
    
    public function attepmts($email , $password){
        $db = App::container()->resolve('Core\Database');
        
        $user = $db->query("select * from users where email = :email", [
            ":email" => $_POST['email'],   
        ])->find();

        
        if($user)
        {
            if(password_verify($_POST['password'],$user['password']))
            {
                $this->login(['email'=> $_POST['email']]);
                return true ;
            }

        }
        return false ;
        
    }
    public function login($user){

        session_start();

        $_SESSION['user']= [ "email"=> $user['email']];
    }
}
?>