<?php

namespace app\reddes\controllers;


class pdfController extends \core\controller{
    
  
    function __construct(){
        
        parent::__construct();
       
    }
    
    function index(){
        
    }
    
    function gerapdf(){ // LIB GERAR PDF
                
        //MODULO PDF
        $texto = '';// TEXTO AQUI
        
        $model = $this->loadModel('pdf');
      
        $this->_view->geraPdf = $model->geraPdf($texto);
   
        
    }
    
}