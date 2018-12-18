<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Berita_model');
	}
	public function index()
	{
		$data['berita'] = $this->Berita_model->getBeritaAll();
		$this->load->view('admin/berita', $data);		
	}
	public function tambah()
	{
		$this->form_validation->set_rules('judul_berita', 'judul_berita', 'trim|required');
		$this->form_validation->set_rules('isi_berita', 'isi_berita', 'trim|required');
		
		if($this->form_validation->run() == FALSE) {
			$this->load->view('admin/tambah_berita');
		}else{
			$config['upload_path']			='./assets/img/berita/';
			$config['allowed_types']		='gif|jpg|png';
			$config['max_size']				=1000000000;
			$config['max_width']			=10240;
			$config['max_height']			=7680;

			$this->load->library('upload', $config);

			if( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/tambah_berita',$error);
			}
			else
			{
				 $data = array('judul_berita' => $this->input->post('judul_berita'),
                        'isi_berita' => $this->input->post('isi_berita'),
                        'tanggal_berita' => Date('Y-m-d'),
                        'id_admin' => 1,
                        'foto_berita' => $this->upload->data('file_name'));

				$this->Berita_model->tambahBerita($data);
				echo "<script> alert('Data Berhasil Berhasil Ditambahkan'); window.location.href='';
			</script>";
			}
			
		}	
	}
	public function edit($id)
	{
		$this->form_validation->set_rules('judul_berita', 'judul_berita', 'trim|required');
		$this->form_validation->set_rules('isi_berita', 'isi_berita', 'trim|required');

		$id_berita = $this->input->post('id_berita');

		$data['berita'] = $this->Berita_model->getBeritaById($id);

		if($this->form_validation->run() == FALSE) {
			$this->load->view('admin/edit_berita',$data);
		}
		else{
			$config['upload_path']			='./assets/img/berita/';
			$config['allowed_types']		='gif|jpg|png';
			$config['max_size']				=1000000000;
			$config['max_width']			=10240;
			$config['max_height']			=7680;
		
			$this->load->library('upload', $config);

			if(!$this->upload->do_upload('userfile'))
			{
				$dataa = array(
						'judul_berita' => $this->input->post('judul_berita'),
                        'isi_berita' => $this->input->post('isi_berita'),
                        'tanggal_berita' => Date('Y-m-d'),
                        'id_admin' => 1,
                        );
				$this->Berita_model->editBerita($id_berita, $dataa);				
				redirect('admin/Berita','refresh');
     		}
     		else 
     		{
     			$dataa = array(
     					'judul_berita' => $this->input->post('judul_berita'),
                        'isi_berita' => $this->input->post('isi_berita'),
                        'tanggal_berita' => Date('Y-m-d'),
                        'id_admin' => 1,
                        'foto_berita' => $this->upload->data('file_name'));

	     		$this->Berita_model->editBerita($id_berita, $dataa);
				redirect('admin/Berita','refresh');
			}	
		}
	}
	public function hapus($id)
	{
		$this->Berita_model->hapusBerita($id);
		redirect('admin/berita','refresh');
	}

}

/* End of file Berita.php */
/* Location: ./application/controllers/Admin/Berita.php */