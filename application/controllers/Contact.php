<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('contact_m');
    }

	public function index()
	{
        $data['row'] = $this->contact_m->get(); 
		$this->template->load('template','admin/inbox/data_inbox', $data);
    }

    // public function add()
    // {   
    //     $contact = new stdClass();
    //     $contact->contact_id = null;
    //     $contact->nama = null;
    //     $contact->email = null;
    //     $contact->subject = null;
    //     $contact->pesan = null;
    //     $data = array(
    //         'page' => 'add',
    //         'row' => $contact
    //     );
    //     $this->template->load('template','admin/contact/contact_form', $data);
    // }

    // public function edit($id)
    // {
    //     $query = $this->contact_m->get($id);
    //     if($query->num_rows() > 0){
    //         $contact = $query->row();
    //         $data = array(
    //             'page' => 'edit',
    //             'row' => $contact
    //         );
    //         $this->template->load('template','admin/contact/contact_form', $data);
    //     } else {
    //         echo "<script>alert('Data tidak ditemukan');</script>";
    //         echo "<script>window.location='".site_url('contact')."'</script>";
    //     }
    // }

    public function process()
    {
        $post = $this->input->post(null, TRUE);
        if(isset($_POST['add'])) {
            $this->contact_m->add($post);
        } 
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Pesan Terkirim');</script>";
        }
        redirect('home/contact');
    }

    public function del($id)
    {
        $this->contact_m->del($id);
        if($this->db->affected_rows() > 0) {
            echo "<script>alert('Data berhasil dihapus');</script>";
        }
        redirect('contact');
    }

}