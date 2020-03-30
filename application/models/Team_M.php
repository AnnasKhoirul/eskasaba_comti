<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team_M extends CI_Model {

    public function get($id = null)
    {
        $this->db->from('tb_team');
        if($id != null) {
            $this->db->where('team_id', $id);
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
            'jabatan' => $post['jabatan'],
            'image' => $post['image'],
        ];
        $this->db->insert('tb_team', $params);
    }

    public function edit($post)
    {
        $params = [
            'nama' => $post['nama'],
            'jabatan' => $post['jabatan'],
        ];
        if($post['image'] != null) {
            $params['image'] = $post['image'];
        }
        $this->db->where('team_id', $post['id']);
        $this->db->update('tb_team', $params);
    }

    public function del($id)
    {
        $this->db->where('team_id', $id);
        $this->db->delete('tb_team');
    }

}