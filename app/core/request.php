<?php

namespace app\core;

class Request{
    
    
    private $_controller;
    private $_metodo;
    private $_args;
    
    
    function __construct(){
                
        $url = substr($_SERVER['REQUEST_URI'],1); //Pega a URL atual
        
        if(!empty($url)){
        
            $url = explode('/',$url);
            $url = array_filter($url);
            
            $this->_controller = array_shift($url);
            $this->_metodo = array_shift($url);
            $this->_args = $url;
            
            if(!isset($this->_controller)){
                $this->_controller = CONTROLLER_DEFAULT;
            }
            if(!isset($this->_metodo)){
                $this->_metodo = 'index';
            }
           if(!isset($this->_args)){
                $this->_args = array(); 
            }
        
            
            
        }else{
            $this->_controller = CONTROLLER_DEFAULT;
             $this->_metodo = 'index';
        }
    }
    
    function getController(){
            return $this->_controller;    
    }
    function getMetodo(){
            return $this->_metodo;    
    }
    function getArgs(){
            return $this->_args;    
    }
    
    
    
        
}