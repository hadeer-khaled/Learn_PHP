<?php 

class Database {

    public $connection ;

    public function __construct($config , $user ,   $password){

        //  var_dump(http_build_query($config, '',';')); 'host=localhost;port=3306;dbname=php'

        $dsn = 'mysql:'.http_build_query($config, '',';');
        // $dsn = "mysql:host=localhost;port=3306;dbname=php;";
        $this->connection = new PDO($dsn, $user, $password);
        
    }

    public function query($query , $params=[]){
 
        $statement =  $this->connection->prepare($query) ;
        $statement->execute($params);
        
        // return $statement->fetchAll(PDO::FETCH_ASSOC);
        return $statement ;
    }
    
}
?>