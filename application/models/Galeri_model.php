<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Galeri_model extends CI_Model {

    public function getUrlFotoAwal(){
        $this->db->select("*");
        $this->db->from("sanan_gelerifoto");
        $this->db->order_by("id_foto asc");
        $this->db->limit("1");
        return $this->db->get()->row()->url_foto;
        }

        public function getUrlVideoAwal(){
            $this->db->select("*");
            $this->db->from("sanan_galerivideo");
            $this->db->order_by("id_video asc");
            $this->db->limit("1");
            return $this->db->get()->row()->url_video;
        }

        public function getSemuaFoto(){
        $this->db->select("*");
        $this->db->from("sanan_gelerifoto");
        $this->db->order_by("id_foto desc");
        $this->db->limit("9");
        $query = $this->db->get();
        return $query->result();
        }

        public function getUrlSemuaVideo(){
            $this->db->select("*");
            $this->db->from("sanan_galerivideo");
            $this->db->order_by("id_video desc");
            $this->db->limit("4");
            return $this->db->get()->result();
        }

}