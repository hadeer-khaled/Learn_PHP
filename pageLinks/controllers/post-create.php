<?php

    $heading = "Create a Post";
    require '../helper_functions.php';
    require './../Database.php';



    if($_SERVER['REQUEST_METHOD'] === "POST"){
 
        $config  = require('./../config.php');
        $db = new Database($config );
        $db->query("insert into posts (title , content , user_id) values (:title , :content , :user_id)" , [
            ":title" =>$_POST['title'],
            ":content" =>$_POST['content'],
            ":user_id"=> 1
        ]);
    }



require '../views/post-create.view.php' ;
?>