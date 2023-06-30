<?php

class Admin extends CI_Controller
{
	
	public function index()
	{
		$data['kerajinan']= $this->model_kerajinan->tampil_data()->result();
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_navbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/spk', $data);
		$this->load->view('templates/admin_footer');
	}
	
	
	public function spk()
	{	
		$data['kerajinan']= $this->model_kerajinan->tampil_data()->result();
		$this->load->view('templates/admin_header');
		$this->load->view('templates/admin_navbar');
		$this->load->view('templates/admin_sidebar');
		$this->load->view('admin/spk', $data);
		$this->load->view('templates/admin_footer');
	}

	
}
		
