<?php

class Home extends CI_Controller{
    public function __construct(){
        parent:: __construct();
        $this->load->model('modelsistem');
    }

    public function index()
    {
        $this->load->view("home/index");
    }

    public function simpan_data(){
        $this->modelsistem->simpan_db();
    }

    public function get_user(){
        $data = $this->db->get('register');
        return $data->result();
    }

    public function count_user(){
        $data = $this->db->get('register');
        return $data->num_rows();
    }

    public function base(){
        $data['title'] = "base";
        $data['register'] = $this->modelsistem->get_user();
        $data['c_register'] = $this->modelsistem->count_user();

        $this->load->view('hasil/hasill',$data);
    }

}







