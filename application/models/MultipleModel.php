<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MultipleModel extends CI_Model {

	public function save_batch($data){
        return $this->db->insert_batch('others', $data);
      }


      public function get($id =  null)  {
           $this->db->from('authors');
           if ($id !=  null) {
            $this->db->where();
           }
           $query = $this->db->get();
            return $query;
      }
}
