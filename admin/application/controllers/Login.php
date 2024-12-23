<?php
	class Login extends CI_Controller {

		public function index() {    
      $this->load->library('form_validation');

			$inputan = $this->input->post();

			$this->form_validation->set_rules("username","Username","required");
			$this->form_validation->set_rules("password","Password","required");

			$this->form_validation->set_message("required","%s Wajib Diisi");

			if ($this->form_validation->run()==TRUE) {
					$this->load->model('Madmin');
					
					$output = $this->Madmin->login($inputan);

				if ($output=="ada") {
					$this->session->set_flashdata('pesan_sukses','Berhasil Login');
					redirect('produk','refresh');

				} else {
					$this->session->set_flashdata('pesan_gagal','Gagal Login');
					redirect('/','refresh');
				}
			}

			$this->load->view('login');
		}
	}
?>