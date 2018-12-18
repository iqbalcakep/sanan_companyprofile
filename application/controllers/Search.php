<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		 // Your own constructor code
		 $this->IG="https://api.instagram.com/oembed/?url=";
		 $this->load->model('berita_model');
		 $this->load->model('produk_model');
		 $this->load->model('galeri_model');
    }

	public function index()
	{
		redirect('home','refresh');
    }
    
    public function detail(){
        $cari = $this->input->post('Search-box');
		$data["berita"] = $this->berita_model->getBeritaPencarian($cari);
		$data["produklast"] = $this->produk_model->getProdukTerakhir();
		$data["produk"] = $this->produk_model->getProduk();
		$this->load->view('search',$data);
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */