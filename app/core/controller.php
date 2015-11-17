<?php

namespace core;



abstract class controller extends \app\core\Request{
    
    protected $_view;
    
    public function __construct(){
       $this->_view = new view( new \app\core\Request);
        
        $this->_view->titulo = 'REDDES FRAMEWORK'; 
    }
    
    abstract public function index();
    
    protected function loadModel($modelo){
        
        $modelo = $modelo . 'Model';
        $rota_model = APP . 'models'. DS . $modelo .'.php';
        
        if(is_readable($rota_model)){
            require_once $rota_model;
            $modelo = new $modelo;
            return $modelo;
        }else{
            echo 'erro ao solicitar model.';
        }
        
    }
}