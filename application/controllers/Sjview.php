<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sjview extends CI_Controller {
    public function index()
    {
        $this->load->library('pdfgenerator');
        
        $this->data['title_pdf'] = '[SJ] - AC CV Brilian';
        
        $file_pdf = '[SJ] - AC CV Brilian';
        $paper = 'A4';
        $orientation = "portrait";
        
		$html = $this->load->view('sj',$this->data, true);	    
        
        $this->pdfgenerator->generate($html, $file_pdf,$paper,$orientation);
    }
}