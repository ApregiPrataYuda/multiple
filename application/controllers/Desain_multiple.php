<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desain_multiple extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{

	     $data = [
            'title' =>  'Desain_multiple'
		 ];
		$this->template->load('template','Desain_multiple', $data);
	}
}