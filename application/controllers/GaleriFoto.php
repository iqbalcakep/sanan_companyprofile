<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriFoto extends CI_Controller {


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
		$url[] = array();
		$hasil[] = array();
		$hasilurl[] = array();
		$url = $this->galeri_model->getSemuaFoto();
		for($i=0;$i<count($url);$i++){
		$hasil[$i] = json_decode($this->curl->simple_get($this->IG.$url[$i]->url_foto));
		}	
		$data["foto"] = $hasil;
		$this->load->view('galerifoto',$data);
		
	}
}

/* End of file Galery.php */
/* Location: ./application/controllers/Galery.php */