<?php


use Core\App ; 
use Http\Forms\LoginForm;
use Core\Authenticator;

$db = App::container()->resolve('Core\Database');

$form = new LoginForm() ;
$auth = new Authenticator() ;

if (! $form->validate($_POST['email'] , $_POST['password'])){
    view('sessions/create.view.php', ["heading"=>"Login", "errors"=> $form->errors]) ;
}


if( $auth->attepmts($_POST['email'],  $_POST['password'])){
    redirect('/');
}else{

    return view('sessions/create.view.php', ["heading"=>"Login", "errors"=> ["email"=>"wrong email or password" ,"password"=>"wrong email or password" ]]) ;
}

// dd($user);
?>