<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('produk_m');
    }

	public function index()
	{
        $data['row'] = $this->produk_m->get(); 
		$this->template->load('template','admin/produk/data_produk', $data);
    }

    public function add()
    {   
        $produk = new stdClass();
        $produk->produk_id = null;
        $produk->nama_produk = null;
        $produk->kategori = null;
        $data = array(
            'page' => 'add',
            'row' => $produk
        );
        $this->template->load('template','admin/produk/produk_form', $data);
    }

    public function edit($id)
    {
        $query = $this->produk_m->get($id);
        if($query->num_rows() > 0){
            $produk = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $produk
            );
            $this->template->load('template','admin/produk/produk_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');</script>";
            redirect('produk');
        }
    }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->produk_m->add($post);
        } else if(isset($_POST['edit'])) {
            $this->produk_m->edit($post);
        }
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil disimpan');</script>";
        }
        redirect('produk');
    }

    public function del($id)
    {
        $this->produk_m->del($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        redirect('produk');
    }

}