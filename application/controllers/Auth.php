<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
        check_already_login();
		$this->load->view('admin/login');
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($post['login'])) {
            $this->load->model('user_m');
            $query = $this->user_m->login($post);
            if($query->num_rows() > 0){
                $row = $query->row();
                $params = array(
                    'userid' => $row->id_user
                );
                $this->session->set_userdata($params);
                echo "<script>
                    window.location='".site_url('admin')."';
                </script>";
            } else {
                echo "<script>
                    alert('Username/Password yang anda masukkan salah');
                    window.location='".site_url('auth/login')."';
                </script>";
            }
        }
    }

    public function logout()
    {
        $params = array('userid');
        $this->session->unset_userdata($params);
        redirect('auth/login');
    }
}