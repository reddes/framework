<?php

require_once(CORE.'view.php');
require_once(CORE.'request.php');
require_once(CORE.'controller.php');
require_once(CORE.'app.php');
require_once(CONFIG.'config.php');
require_once(CORE.'libs.php');



spl_autoload_register( function ($className) {
 
   
    
    $className = str_replace('\\', DS ,$className);
    
    $className = ROOT . $className .'.php';
    
    if(!file_exists($className)){
        
    }else{
        
        include $className;
    }
   
    
    
    
    

});