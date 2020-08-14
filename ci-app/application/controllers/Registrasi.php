<?php

class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("modelsistem");
    }

    public function index()
    {
        $this->load->view("registrasi/regiss");
    }

    public function insert() {
        $this->modelsistem->simpan_db();
    }
}