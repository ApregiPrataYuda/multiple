<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Select extends CI_Controller {

     function __construct() {
        parent::__construct();
        $this->load->model('MultipleModel');
     }


	public function index()
	{
        $data = [
            'title' => 'sample  use library select2'
        ];
		$this->template->load('template','Select/data',$data);
	}

    public function Plus() {
		$this->form_validation->set_rules('email[]', 'email', 'required');
		$this->form_validation->set_message('required', '{field} Still empty');
		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
        if ($this->form_validation->run() == FALSE) {
            $data = [
                'title' => 'sample  use library select2 Form',
                'getsel' => $this->MultipleModel->get()
            ];
            $this->template->load('template','Select/Form',$data);
        }
        else {
          $post = count($this->input->post('email'));

          var_dump($post); die();
        }
       
    }
}
