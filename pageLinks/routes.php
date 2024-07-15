<?php

   $page =  parse_url(($_SERVER['REQUEST_URI']))["path"];
   // dd($page);
   echo  $page;

   
   if($page === "/etax/Learn_PHP/pageLinks/"){
    require './controllers/index.php';
   }
   else if($page === "about.php"){
    require './controllers/about.php';
   }
   else if($page === "contact.php"){
    require './controllers/contact.php';
   }

 
?>