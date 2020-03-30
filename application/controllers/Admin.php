<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        // check_not_login();
		$this->load->model('team_m');
		$this->load->model('galeri_m');
		$this->load->model('produk_m');
		$this->load->model('contact_m');
		$this->load->model('user_m');
	}

	public function index()
	{
		check_not_login();
		$data['row'] = $this->team_m->get(); 
		$data['galeri'] = $this->galeri_m->get();
		$data['produk'] = $this->produk_m->get();
		$data['contact'] = $this->contact_m->get();
		$data['user'] = $this->user_m->get();
		$this->template->load('template','admin/dashboard', $data);
    }
}