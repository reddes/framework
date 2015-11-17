<?php

namespace app\core;

class database extends \PDO{
    
    
    public function __construct(){
      
        try{
        parent::__construct(
        'mysql:host='.HOST.
        ';dbname='. DB,
        DB_USER, DB_PASS    
        
        );
        
            }
        catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
            }


        
    }
}