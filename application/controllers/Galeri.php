<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('galeri_m');
    }

	public function index()
	{
        $data['row'] = $this->galeri_m->get(); 
		$this->template->load('template','admin/galeri/data_galeri', $data);
    }

    public function add()
    {   
        $galeri = new stdClass();
        $galeri->galeri_id = null;
        $galeri->nama = null;
        $data = array(
            'page' => 'add',
            'row' => $galeri
        );
        $this->template->load('template','admin/galeri/galeri_form', $data);
    }

    public function edit($id)
    {
        $query = $this->galeri_m->get($id);
        if($query->num_rows() > 0){
            $galeri = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $galeri
            );
            $this->template->load('template','admin/galeri/galeri_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');</script>";
            redirect('galeri');
        }
    }

    public function process()
    {
        $config['upload_path']      = './images/galeri/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2048;
            $config['file_name']        = 'galeri-'.date('ymd').'-'.substr(md5(rand()),0,10);
            $this->load->library('upload', $config);

            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                if(@$_FILES['image']['name'] != null){
                if($this->upload->do_upload('image')) {
                    $post['image'] = $this->upload->data('file_name');
                    $this->galeri_m->add($post);
                    if($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data berhasil disimpan');
                    } 
                    // print_r($this->upload->display_errors());
                    redirect('galeri');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('galeri/add');
                }
            } else {
                $post['image'] = null;
                $this->galeri_m->add($post);
                if($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan');
                }
                redirect('galeri');
            }
        
        } else if(isset($_POST['edit'])) {
            if(@$_FILES['image']['name'] != null){
                if($this->upload->do_upload('image')) {

                    $galeri = $this->galeri_m->get($post['id'])->row();
                    if($galeri->image != null) {
                        $target_file = './images/galeri/'.$galeri->image;
                        unlink($target_file);
                    }

                    $post['image'] = $this->upload->data('file_name');
                    $this->galeri_m->edit($post);
                    if($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data berhasil disimpan');
                    } 
                    // print_r($this->upload->display_errors());
                    redirect('galeri');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('galeri/add');
                }
            } else {
                $post['image'] = null;
                $this->galeri_m->edit($post);
                if($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan');
                }
                redirect('galeri');
            }
        }
    }

    public function del($id)
    {
        $galeri = $this->galeri_m->get($id)->row();
        if($galeri->image != null) {
            $target_file = './images/galeri/'.$galeri->image;
            unlink($target_file);
        }
        $this->galeri_m->del($id);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('galeri');
    }

}