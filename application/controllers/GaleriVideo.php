<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GaleriVideo extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		 // Your own constructor code
		 $this->load->model('berita_model');
		 $this->load->model('produk_model');
		 $this->load->model('galeri_model');
    }

	public function index()
	{
		$data["video"] = $this->galeri_model->getUrlSemuaVideo();
		$this->load->view('galerivideo',$data);
		//var_dump($data);
	}

}

/* End of file GaleriVideo */
/* Location: ./application/controllers/GaleriVideo */