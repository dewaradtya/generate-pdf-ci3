<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotationview extends CI_Controller {
    public function index()
    {
        $this->load->library('pdfgenerator');
        
        $this->data['title_pdf'] = '[Quot] PH. PT. PMP Jember 181022';
        
        $file_pdf = '[Quot] PH. PT. PMP Jember 181022';
        $paper = 'A4';
        $orientation = "portrait";
        
		$html = $this->load->view('quotation',$this->data, true);	    
        
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
}