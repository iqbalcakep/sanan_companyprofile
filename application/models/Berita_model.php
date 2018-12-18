<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Berita_model extends CI_Model {

    public function getBeritaTerbaru(){
        $this->db->select("*");
        $this->db->from("sanan_berita as b");
        $this->db->join("sanan_admin as a","b.id_admin = a.id_admin");
        $this->db->order_by("tanggal_berita desc");
        $this->db->limit("5");
        $data = $this->db->get()->result();
        return $data;
    }

    public function getBeritaById($id_berita){
        $this->db->select("*");
        $this->db->from("sanan_berita as b");
        $this->db->join("sanan_admin as a","b.id_admin = a.id_admin");
        $this->db->where('id_berita',$id_berita);
        $data = $this->db->get()->result();
        return $data;
    }


}