<?php

namespace app\core;


class Libs{
    
    
    public function __construct(){
        $this->pdf();
    }
    
    public function pdf(){
        if(is_readable('libs'.DS.'MPDF57'.DS.'mpdf.php')){
            require_once('libs'.DS.'MPDF57'.DS.'mpdf.php');
            }
    }
}