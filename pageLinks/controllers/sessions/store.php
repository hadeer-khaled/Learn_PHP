<?php


use Core\App ; 
use Http\Forms\LoginForm;

$db = App::container()->resolve('Core\Database');

$form = new LoginForm() ;

if (! $form->validate($_POST['email'] , $_POST['password'])){
    view('sessions/create.view.php', ["heading"=>"Login", "errors"=> $form->errors]) ;
}


$user = $db->query("select * from users where email = :email", [
    ":email" => $_POST['email'],   
])->find();

if($user){
    
    if(password_verify($_POST['password'],$user['password'])){
        login(['email'=> $_POST['email']]);
        header("location: /etax/Learn_PHP/pageLinks/");
        exit();
    }

}
return view('sessions/create.view.php', ["heading"=>"Login", "errors"=> ["email"=>"wrong email or password" ,"password"=>"wrong email or password" ]]) ;

// dd($user);
?>