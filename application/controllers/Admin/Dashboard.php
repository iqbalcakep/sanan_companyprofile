<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/dashboard');
	}

}

/* End of file index.php */
/* Location: ./application/controllers/admin/index.php */