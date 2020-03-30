<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_M extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('tb_produk');
        if($id != null) {
            $this->db->where('produk_id', $id);
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
            'nama_produk' => $post['nama_produk'],
            'kategori' => $post['kategori'],
        ];
        $this->db->insert('tb_produk', $params);
    }

    public function edit($post)
    {
        $params = [
            'nama_produk' => $post['nama_produk'],
            'kategori' => $post['kategori'],
        ];
        $this->db->where('produk_id', $post['id']);
        $this->db->update('tb_produk', $params);
    }

    public function del($id)
    {
        $this->db->where('produk_id', $id);
        $this->db->delete('tb_produk');
    }

}