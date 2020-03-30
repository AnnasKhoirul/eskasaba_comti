<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_M extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('tb_contact');
        if($id != null) {
            $this->db->where('contact_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function create($data)
    {
        $query = $this->db->insert("user", $data);

        if($query){
            return true;
        }else{
            return false;
        }
    }

    public function add($post)
    {
        $params = [
            'nama' => $post['nama'],
            'email' => $post['email'],
            'subject' => $post['subject'],
            'pesan' => $post['pesan'],
        ];
        $this->db->insert('tb_contact', $params);
    }

    // public function edit($post)
    // {
    //     $params = [
    //         'nama_contact' => $post['nama_contact'],
    //         'kategori' => $post['kategori'],
    //     ];
    //     $this->db->where('contact_id', $post['id']);
    //     $this->db->update('tb_contact', $params);
    // }

    public function del($id)
    {
        $this->db->where('contact_id', $id);
        $this->db->delete('tb_contact');
    }

}