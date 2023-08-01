<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MultipleModel extends CI_Model {

	public function save_batch($data){
        return $this->db->insert_batch('others', $data);
      }
}
