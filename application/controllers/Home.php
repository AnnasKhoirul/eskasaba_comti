<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        // check_not_login();
		$this->load->model('team_m');
		$this->load->model('galeri_m');
		$this->load->model('produk_m');
	}
	
	public function index()
	{
		// check_already_login();
		$data['row'] = $this->team_m->get(); 
		$data['galeri'] = $this->galeri_m->get();
		$data['produk'] = $this->produk_m->get(); 
		$this->load->view('index', $data);
	}

	public function contact()
	{
		$this->load->view('contact');
    }
}
