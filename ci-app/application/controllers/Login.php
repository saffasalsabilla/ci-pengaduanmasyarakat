<?php

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view("login/login");
    }

    public function aksi_login(){
        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');
        $where = array(
            'username' => $usernames,
            'password' => md5($passwords)
        );
        $cek= $this->modelsistem->cek_login("user", $where)->num_rows();

        if($cek > 0) {
            $data_session = array(
                'usernama' => $usernames,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);

            if($this->session->userdata('status') == 'login') {
                header("Location:" .base_url(). 'sistem/home/'.$this->session->userdata('usernama') );
            } else {
                echo "Login Gagal";
            }
        } else {
            echo "Username dan Password Salah !";
        }
    }

    function logout(){
        $this->session->sess_destroy();
    }
}

?>