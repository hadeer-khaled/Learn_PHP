<?php

require 'helper-functions.php';
require 'Database.php';
require 'Response.php';
require 'router.php';






    // $BASE_URL = "http://localhost/etax/Learn_PHP/pageLinks/";
    // // define('BASE_URL', '/etax/Learn_PHP/pageLinks/');


    // $page =  parse_url(($_SERVER['REQUEST_URI']))["path"];
    // echo  $page;

 


    // $id = $_GET['id'];

    // $query = "select * from posts where id={$id}"; // allow sql injection vulnerabilities
   
    // $query = "select * from posts where id= ?";   // prevent sql injection vulnerabilities
    // $post =$db->query($query , [$id])->fetch(PDO::FETCH_ASSOC);
    // dd($post);

    //------------OR ------------ \\
    // $query = "select * from posts where id= :id";   // prevent sql injection vulnerabilities
    // $post =$db->query($query , [':id' =>$id])->fetch(PDO::FETCH_ASSOC);


?>