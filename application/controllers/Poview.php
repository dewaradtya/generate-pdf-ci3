<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poview extends CI_Controller {
    public function index()
    {
        $this->load->library('pdfgenerator');
        
        $this->data['title_pdf'] = '[PO] - MBA 053(4 Januari 2023) PT. SIER';
        
        $file_pdf = '[PO] - MBA 053(4 Januari 2023) PT. SIER';
        $paper = 'A4';
        $orientation = "portrait";
        
		$html = $this->load->view('po',$this->data, true);	    
        
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
}