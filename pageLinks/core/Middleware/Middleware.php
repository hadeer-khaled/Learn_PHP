<?php
namespace Core\Middleware ;
class Middleware{
    const MAP =[
        "guest"=>Guest::class,
        "auth"=>Auth::class,
    ];
}

?>