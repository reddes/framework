<?php
namespace app\core;

//require_once(CORE.'database.php');



class Model{
    
    
    protected $_db,$_pdf;
    
    public function __construct(){
       $this->_db = new \app\core\database();
        $this->_libs = new \app\core\libs();
        
    }
}