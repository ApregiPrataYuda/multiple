<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Multiple extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('multipleModel');
	}

	public function index()
	{

	     $data = [
            'title' =>  'Multiple'
		 ];
		$this->template->load('template','Multiple/Multiple', $data);
	}

    function Add()  {
        $this->form_validation->set_rules('username[]', 'username', 'required');
		// $this->form_validation->set_rules('password', 'password', 'required');
		// $this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_message('required', '{field} Still empty');
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
		if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' =>  'Multiple'
             ];
            $this->template->load('template','Multiple/Form', $data);
        }else {
            $username = $_POST['username']; 
            $password = $_POST['password']; 
            $email = $_POST['email']; 
            $data = array();
    
            $index = 0; 
        foreach($username as $datausername){ 
          array_push($data, array(
            'username'=> strtoupper($datausername),
            'password'=> $password[$index], 
            'email'=>$email[$index], 
          ));
          $index++;
        }
      
        $this->multipleModel->save_batch($data); 
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', "DATA SUCCESSFULLY SAVED");
        }
        redirect('Multiple');
        }
      
    }

    function process() {

        $this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_message('required', '{field} Still empty');
		$this->form_validation->set_message('alpha_numeric_spaces', '{field} Only letters and numbers allowed');
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
		if ($this->form_validation->run() == FALSE) {
           $this->Add();
        }else{
            $username = $_POST['username']; 
            $password = $_POST['password']; 
            $email = $_POST['email']; 
            $data = array();
    
            $index = 0; 
        foreach($username as $datausername){ 
          array_push($data, array(
            'username'=> strtoupper($datausername),
            'password'=>$password[$index], 
            'email'=>$email[$index], 
          ));
          $index++;
        }
        var_dump($data); die();
        $this->multipleModel->save_batch($data); 
        }

        
    }
}