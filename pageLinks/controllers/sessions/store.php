<?php


use Core\App ; 
use Http\Forms\LoginForm;
use Core\Authenticator;

$db = App::container()->resolve('Core\Database');

$form = new LoginForm() ;

if ($form->validate($_POST['email'] , $_POST['password'])){
    $auth = new Authenticator() ;

    if( $auth->attepmts($_POST['email'],  $_POST['password'])){
        redirect('/');
    }
    $form->error("email" , "wrong email or password") ;
    $form->error("password"  ,  "wrong email or password") ;

}

return view('sessions/create.view.php', ["heading"=>"Login", "errors"=> $form->errors()]) ;

?>