<?php 

namespace Core ; 
use PDO ;

class Database {

    public $connection ;
    public $statement ;

    public function __construct($config , $user='root' ,   $password=''){

        //  var_dump(http_build_query($config, '',';')); 'host=localhost;port=3306;dbname=php'

        $dsn = 'mysql:'.http_build_query($config, '',';');
        // $dsn = "mysql:host=localhost;port=3306;dbname=php;";
        $this->connection = new PDO($dsn, $user, $password);
        
    }

    public function query($query , $params=[]){
 
        $this->statement =  $this->connection->prepare($query) ;
        $this->statement->execute($params);
        
        // return $statement->fetchAll(PDO::FETCH_ASSOC);
        return $this ;
    }

    public function find(){
       return $this->statement->fetch(PDO::FETCH_ASSOC);
    }
    public function findOrFail(){

        $result =  $this->find();
        if(! $result) {abort();}
        return $result;
    }
    public function get(){
       return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
}
?>