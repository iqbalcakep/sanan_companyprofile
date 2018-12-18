<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Komentar_model extends CI_Model {

    public function getJumlah($id_berita){
        $this->db->select('*');
        $this->db->from('sanan_komentar');
        $this->db->where('id_berita',$id_berita);
        $q = $this->db->get();
		return $q->num_rows();

    }

    public function pilihSemua($id_berita){
        $this->db->select('*');
        $this->db->from('sanan_komentar');
        $this->db->where('id_berita',$id_berita);
        $q = $this->db->get();
		return $q->result();
    }

    public function tambahkomentar($data){
        
    }


}