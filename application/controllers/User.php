<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        check_not_login();
        $this->load->model('user_m');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data['row'] = $this->user_m->get();
		$this->template->load('template', 'admin/profile', $data);
    }
    
    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['edit'])) {
            $this->user_m->edit($post);
        }
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        redirect('user');
    }
}
