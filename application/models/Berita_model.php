<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Berita_model extends CI_Model {

    public function getBeritaAll(){
        $this->db->select("*");
        $this->db->from("sanan_berita as b");
        $this->db->join("sanan_admin as a","b.id_admin = a.id_admin");
        $data = $this->db->get()->result();
        return $data;
    }
    public function tambahBerita($data)
    {        
        $this->db->insert('sanan_berita', $data);
    }
    public function hapusBerita($id)
    {
        $this->db->where('id_berita', $id);
        $this->db->delete('sanan_berita');
    }
    public function editBerita($id, $data)
    {   
        $this->db->where('id_berita', $id);
        $this->db->update('sanan_berita', $data);
    }

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

    public function getBeritaPencarian($cari){
        $this->db->select("*");
        $this->db->from("sanan_berita as b");
        $this->db->join("sanan_admin as a","b.id_admin = a.id_admin");
        $this->db->like('judul_berita', $cari, 'both');
        $data = $this->db->get()->result();
        return $data;
    }


}