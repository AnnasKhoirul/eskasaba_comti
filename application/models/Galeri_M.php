<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri_M extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('tb_galeri');
        if($id != null) {
            $this->db->where('galeri_id', $id);
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
            'image' => $post['image'],
        ];
        $this->db->insert('tb_galeri', $params);
    }

    public function edit($post)
    {
        $params = [
            'nama' => $post['nama'],
        ];
        if($post['image'] != null) {
            $params['image'] = $post['image'];
        }
        $this->db->where('galeri_id', $post['id']);
        $this->db->update('tb_galeri', $params);
    }

    public function del($id)
    {
        $this->db->where('galeri_id', $id);
        $this->db->delete('tb_galeri');
    }

}