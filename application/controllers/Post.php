<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		 // Your own constructor code
		 $this->load->model('berita_model');
		 $this->load->model('produk_model');
		 $this->load->model('komentar_model');
    }

	public function image()
	{
		$this->load->view('postimage');		
	}
	public function noimage()
	{
		$this->load->view('noimage');		
	}
	public function video()
	{
		$this->load->view('video');		
	}

	public function detail($id_berita){
		$data["berita"] = $this->berita_model->getBeritaTerbaru();
		$data["beritaid"] = $this->berita_model->getBeritaById($id_berita);
		$data["produklast"] = $this->produk_model->getProdukTerakhir();
		$data["produk"] = $this->produk_model->getProduk();
		$data["jumlahkomentar"] = $this->komentar_model->getJumlah($id_berita);
		$data["komentar"] = $this->komentar_model->pilihSemua($id_berita);
		$this->load->view('berita_detail',$data);
	}

	public function komentar(){
		$data = array(
			"id_berita" => $this->input->post('id_berita'),
			"nama" => $this->input->post('nama'),
			"email" => $this->input->post('email'),
			"tanggal" => date('Y-m-d H:i:s'),
			"isi" => $this->input->post('isi')
		);

		$this->db->insert('sanan_komentar',$data);
		redirect($_SERVER['HTTP_REFERER']);
	}
}

/* End of file Post.php */
/* Location: ./application/controllers/Post.php */