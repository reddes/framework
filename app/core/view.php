<?php

namespace core;

class view{
    
    private $controlador;
    
    public function __construct(\app\core\Request $request){
        $this->controlador = $request->getController();
        
        
    }
    
    public function renderizar($view, $itens = false){
        
        $rota_view = strtolower(APP . 'views' . DS . $this->controlador . DS . $view .'.php');
       
        if(is_readable($rota_view)){
            
            include_once $rota_view;
            
        }else{
            
            include_once(APP . 'views' . DS . $this->controlador . DS . 'index'.'.php');
            
        }
        
            
    }
    
    
}