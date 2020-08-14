<?php

Class modelsistem extends CI_Model{

    public function simpan_db(){
            // $config['upload_path'] = './assets/';
            // $config['allowed_types'] = 'jpg|png|gif';
            // $config['max_size'] = '2038000';
            // $config['file_name'] = url_title(%this->input->post('gambar'));
            // $filename = $this->upload->file_name;
            // $this->upload->initialize($config);
            // $this->upload->do_upload('gambar);
            // $data = $this->upload->data();

    $data = array(
        'nik' => $this->input->post('nik'),
        'nama' => $this->input->post('nama'),
        'username' => $this->input->post('username'),
        'password' => $this->input->post('password'),
        'telpon' => $this->input->post('telepon'),
        
    );

    $this->db->insert('register', $data);
    header("Location:".base_url().'sistem/base/hasill.php');
    }
    
    public function get_user()
    {
        $data = $this->db->get('register');
        return $data->result();
    }

    
    public function count_user()
    {
        $data = $this->db->get('register');
        return $data->num_rows();
    }

}
?>