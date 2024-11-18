<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoiceview extends CI_Controller {
    public function index()
    {
        $this->load->library('pdfgenerator');
        
        $this->data['title_pdf'] = '[Inv] CV. Logam Inti Mulia';
        
        $file_pdf = '[Inv] CV. Logam Inti Mulia';
        $paper = 'A4';
        $orientation = "portrait";
        
		$html = $this->load->view('invoice',$this->data, true);	    
        
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
}