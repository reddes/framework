<?php


class pdfModel extends \app\core\model{
    
    
    public function __construct(){
      parent::__construct();
    }
    
    
    public function geraPdf($texto){
        
        $pdf = new mPDF();
        $pdf->WriteHTML($texto);    
        $pdf->Output();

        exit;
        
    }    
    
}