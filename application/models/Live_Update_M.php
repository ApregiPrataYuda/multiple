<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Live_Update_M extends CI_Model {

	public function get()  {
        $sql = "SELECT * FROM data";
        $query = $this->db->query($sql);
        return $query;
    }

    function updateUser($id,$field,$value){

        // Update
        $data=array($field => $value);
        $this->db->where('id',$id);
        $this->db->update('data',$data);
      }
}
