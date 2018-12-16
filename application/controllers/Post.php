<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {

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
}

/* End of file Post.php */
/* Location: ./application/controllers/Post.php */