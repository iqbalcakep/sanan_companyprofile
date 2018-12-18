<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('contact');
	}
	
	public function kirim_email()
    {

		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('subjek', 'subjek', 'required');
		$this->form_validation->set_rules('pesan', 'pesan', 'required');
		
		// Validate submitted form data
		if($this->form_validation->run() == true){
			
			// Define email data                
			$name = $this->input->post('nama');
			$from_email = $this->input->post('email');
			$subject = $this->input->post('subjek');
			$message = $this->input->post('pesan');
        // Konfigurasi email
        $config = [
               'mailtype'  => 'html',
               'charset'   => 'utf-8',
               'protocol'  => 'smtp',
               'smtp_host' => 'ssl://smtp.gmail.com',
               'smtp_user' => 'masykurafifi13@gmail.com',    // Ganti dengan email gmail kamu
               'smtp_pass' => 'iqbalacakep.com@gmail.com',      // Password gmail kamu
               'smtp_port' => 465,
               'crlf'      => "\r\n",
               'newline'   => "\r\n"
           ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from($from_email, $name);

        // Email penerima
        $this->email->to('kripiksanan@gmail.com'); // Ganti dengan email tujuan kamu

        // Lampiran email, isi dengan url/path file

        // Subject email
        $this->email->subject($subject);

        // Isi email
        $this->email->message($message);

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">Pesan Sukses Terkirim</div>');
			redirect('contact');
        } else {
			$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Pesan Tidak Terkirim</div>');
			redirect('contact');
        }
	}else{

		}

	}
	
}



/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */