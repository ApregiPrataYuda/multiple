<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InvoicePage extends CI_Controller {


	public function index()
	{
        $data = [
            'title' => 'FOR invoice'
        ];
		$this->template->load('template','invoice',$data);
	}
}