<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live_Update extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('Live_Update_M');
	}

	public function index()
	{
        $datax  = $this->Live_Update_M->get()->result_array();
       
	     $data = [
            'title' => 'Tes Live Update',
             'row' => $datax
		 ];
		$this->template->load('template','Live_Update/data', $data);
	}

    public function updateuser(){
        // POST values
        $id = $this->input->post('id');
        $field = $this->input->post('field');
        $value = $this->input->post('value');
        
   
        // Update records
        $this->Live_Update_M->updateUser($id,$field,$value);
   
        echo 1;
        exit;
      }
   
}