<?php

namespace app\reddes\controllers;


class indexController extends \core\controller{
    
  
    function __construct(){
        
        parent::__construct();
       
    }
    function index(){
        //Para imprimir na view...
        //echo $this->titulo;
        
        $this->_view->renderizar('index');
    }
    
    
}