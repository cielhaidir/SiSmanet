<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tassmanet extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$data['bg'] = 'bg-smanet';
		$this->load->view('template/header', $data);
		$this->load->view('tassmanet');
	}
	public function pilih()
	{
		
		$this->load->model('siswa_model');
		$data['siswa'] = $this->siswa_model->getdatasiswa();
		$data['bg'] = 'bg-smanet';
		$this->load->view('template/header', $data);
		$this->load->view('tassmanet2', $data);
	}
}
