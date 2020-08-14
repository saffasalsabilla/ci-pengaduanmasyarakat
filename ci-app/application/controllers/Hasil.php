<?php

class Hasil extends CI_Controller
{
   public function get_user(){ 
       $data = $this->db->get('register');
       return $data->result();
   }

   public function count_user(){
    $data = $this->db->get('register');
    return $data->num_rows();
}

}
