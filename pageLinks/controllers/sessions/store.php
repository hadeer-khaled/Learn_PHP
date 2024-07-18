<?php

use Core\Validator ; 
use Core\App ; 

$db = App::container()->resolve('Core\Database');

$errors = [];


if (! Validator::string($_POST['email'] , 1 , 100)) {
    $errors['email'] = "Invalid Email";
}
if (! Validator::string($_POST['password'] )) {
    $errors['password'] = "password doesnot match  ";
}

if (!empty($errors)) {
    view('sessions/create.view.php', ["heading"=>"Login", "errors"=> $errors]) ;

}

// dd($_POST);
$user = $db->query("select * from users where email = :email", [
    ":email" => $_POST['email'],   
])->find();

if(! $user){
    return view('sessions/create.view.php', ["heading"=>"Login", "errors"=> ["email"=> "Cannot find this email"]]) ;

}

if(password_verify($_POST['password'],$user['password'])){
    login(['email'=> $_POST['email']]);
    header("location: /etax/Learn_PHP/pageLinks/");
    exit();
}else{

    return view('sessions/create.view.php', ["heading"=>"Login", "errors"=> ["email"=>"wrong email or password"]]) ;

}
// dd($user);
?>