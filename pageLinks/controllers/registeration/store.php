<?php

use Core\Validator ; 
use Core\App ; 

$db = App::container()->resolve('Core\Database');

$errors = [];


if (! Validator::string($_POST['email'] , 1 , 100)) {
    $errors['email'] = "Invalid Email";
}
if (! Validator::string($_POST['password'] , 8 , 100)) {
    $errors['password'] = "password is required and cannot be less than 8 characters ";
}

if (!empty($errors)) {
    view('registeration/create.view.php', ["heading"=>"Register", "errors"=> $errors]) ;

}

$user = $db->query("select * from users where email = :email", [
    ":email" => $_POST['email'],   
])->find();

if($user){

    // header("location: /etax/Learn_PHP/pageLinks/");

}else{

    $db->query("INSERT INTO users (email, password) VALUES (:email, :password)", [
        ":email" => $_POST['email'],
        ":password" => password_hash($_POST['password'] , PASSWORD_BCRYPT),
       
    ]);


    // login($user);
    // dd(session_save_path());
    header("location: /etax/Learn_PHP/pageLinks/login");
    exit();
}

?>