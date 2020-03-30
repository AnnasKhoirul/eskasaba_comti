<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('tb_user');
        if($id != null) {
            $this->db->where('id_user', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function edit($post)
    {
        $params['nama'] = $post['name'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['pass']);
        $params['telepon'] = $post['telepon'];
        $params['alamat'] = $post['alamat'];
        $this->db->where('id_user', $post['id_user']);
        $this->db->update('tb_user',$params);
    }

}