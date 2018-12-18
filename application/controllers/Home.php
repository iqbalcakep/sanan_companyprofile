<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		
            
		$urlfoto = $this->galeri_model->getUrlFotoAwal();
		$urlvideo = $this->galeri_model->getUrlVideoAwal();
		$data["foto"] = json_decode($this->curl->simple_get($this->IG.$urlfoto));
		$data["video"] = $urlvideo;
		$data["berita"] = $this->berita_model->getBeritaTerbaru();
		$data["produklast"] = $this->produk_model->getProdukTerakhir();
		$data["produk"] = $this->produk_model->getProduk();
		$data["file"]=$this->galeri_model->getSemuaFile();
		$this->load->view('home',$data);
		//var_dump($data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */