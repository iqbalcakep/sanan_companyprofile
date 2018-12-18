<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk_model extends CI_Model {

    public function getProdukTerakhir(){
        $this->db->select("*");
        $this->db->from("sanan_produk");
        $this->db->order_by("id_produk desc");
        $this->db->limit("1");
        $data = $this->db->get()->result();
        return $data;
    }

    public function getProduk(){
        $this->db->select("*");
        $this->db->from("sanan_produk");
        $this->db->order_by("id_produk asc");
        $this->db->limit("3");
        $data = $this->db->get()->result();
        return $data;
    }

}