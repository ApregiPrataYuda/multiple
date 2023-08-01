<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multiples extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{

	     $data = [
            'title' =>  'Multiples'
		 ];
		$this->template->load('template','Multiples/data', $data);
	}
    

    public function Add()  {
        $data = [
            'title' =>  'Multiples Form'
		 ];
		$this->template->load('template','Multiples/Form', $data);
    }
}