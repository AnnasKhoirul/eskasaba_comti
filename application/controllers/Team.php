<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('team_m');
    }

	public function index()
	{
        $data['row'] = $this->team_m->get(); 
		$this->template->load('template','admin/team/data_team', $data);
    }

    public function add()
    {   
        $team = new stdClass();
        $team->team_id = null;
        $team->nama = null;
        $team->jabatan = null;
        $data = array(
            'page' => 'add',
            'row' => $team
        );
        $this->template->load('template','admin/team/team_form', $data);
    }

    public function edit($id)
    {
        $query = $this->team_m->get($id);
        if($query->num_rows() > 0){
            $team = $query->row();
            $data = array(
                'page' => 'edit',
                'row' => $team
            );
            $this->template->load('template','admin/team/team_form', $data);
        } else {
            echo "<script>alert('Data tidak ditemukan');</script>";
            redirect('team');
        }
    }

    public function process()
    {
        $config['upload_path']      = './images/team/';
            $config['allowed_types']    = 'gif|jpg|png|jpeg';
            $config['max_size']         = 2048;
            $config['file_name']        = 'team-'.date('ymd').'-'.substr(md5(rand()),0,10);
            $this->load->library('upload', $config);

            $post = $this->input->post(null, TRUE);
            if(isset($_POST['add'])) {
                if(@$_FILES['image']['name'] != null){
                if($this->upload->do_upload('image')) {
                    $post['image'] = $this->upload->data('file_name');
                    $this->team_m->add($post);
                    if($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data berhasil disimpan');
                    } 
                    // print_r($this->upload->display_errors());
                    redirect('team');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('team/add');
                }
            } else {
                $post['image'] = null;
                $this->team_m->add($post);
                if($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan');
                }
                redirect('team');
            }
        
        } else if(isset($_POST['edit'])) {
            if(@$_FILES['image']['name'] != null){
                if($this->upload->do_upload('image')) {

                    $team = $this->team_m->get($post['id'])->row();
                    if($team->image != null) {
                        $target_file = './images/team/'.$team->image;
                        unlink($target_file);
                    }

                    $post['image'] = $this->upload->data('file_name');
                    $this->team_m->edit($post);
                    if($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'Data berhasil disimpan');
                    } 
                    // print_r($this->upload->display_errors());
                    redirect('team');
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect('team/add');
                }
            } else {
                $post['image'] = null;
                $this->team_m->edit($post);
                if($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data berhasil disimpan');
                }
                redirect('team');
            }
        }
    }

    public function del($id)
    {
        $team = $this->team_m->get($id)->row();
        if($team->image != null) {
            $target_file = './images/team/'.$team->image;
            unlink($target_file);
        }
        $this->team_m->del($id);
        if($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data berhasil dihapus');
        }
        redirect('team');
    }

}