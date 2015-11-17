<?php


class App{
    
    
    
    public function start(app\core\Request $request){
//        $request = new app\core\Request();
        $controller_real = 'controllers'.DS.strtolower($request->getController()). 'Controller';
        $controller = 'App\Reddes\controllers\\'.strtolower($request->getController()). 'Controller';
        $metodo = strtolower($request->getMetodo());
        
        $rota_controller = APP . $controller_real .'.php'; // roda do controlador
        
        if(is_readable($rota_controller)){
                      
            require_once($rota_controller); // Adiciona controller
            
            $controller = new $controller();
            
            if(is_callable(array($controller,$metodo))){
               
                $metodo = $request->getMetodo();
            }
            else{
                $metodo = 'index';
            }
            
            if(!empty($request->getArgs())){
                
                call_user_func_array(array($controller,$metodo),$request->getArgs());
            }
            else{
                
                call_user_func(array($controller,$metodo));
            }
            
        }else{
            //Caso não encontre nenhum controller..
            header('location:/');
            
        }
        
        
    }
    
    //TAMPLATE
    
    function Template($modelo){
        $template = TEMPLATE_DEFAULT.DS.$modelo.DS.'index.php';
        
        include $template;
        
        
       
    }
}