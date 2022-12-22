<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');

		if(empty($this->session->userdata['data_user'])){
			redirect('/home');
		}
	}
	public function index()
	{
		$this->load->view('admin/navbar');
		$this->load->view('admin/admin');
		$this->load->view('admin/footer');
	}
	public function agenda()
	{
		$this->load->model('agenda_model');
		$data['agenda'] = $this->agenda_model->getagenda();
		$this->load->view('admin/navbar');
		$this->load->view('informasi/agenda', $data);	
		$this->load->view('admin/footer');
	}
	public function tambah_agenda()
	{
		$this->load->view('admin/navbar');
		$this->load->view('informasi/agenda_tambah');	
		$this->load->view('admin/footer');
	}
	public function post_agenda()
	{
		$this->load->model('agenda_model');
		$this->agenda_model->tambahagenda();
		redirect('admin/agenda');
	}
	public function edit_agenda()
	{
		$this->load->model('agenda_model');
		$data['agenda'] = $this->agenda_model->getidagenda();
		$this->load->view('admin/navbar');
		$this->load->view('informasi/agenda_edit', $data);
		$this->load->view('admin/footer');
	}
	public function ngedit_agenda()
	{
		$this->load->model('agenda_model');
		$this->agenda_model->editagenda();
		redirect('admin/agenda');
		
	}
	public function hapus_agenda()
	{
		$this->load->model('agenda_model');
		$this->berita_model->hapusagenda();
		redirect('admin/agenda');
	}
	public function berita()
	{
		$this->load->model('berita_model');
		$data['berita'] = $this->berita_model->getberita();
		$this->load->view('admin/navbar');
		$this->load->view('informasi/berita', $data);	
		$this->load->view('admin/footer');
		
	}
	public function tambah_berita()
	{
		$this->load->view('admin/navbar');
		$this->load->view('informasi/berita_tambah');	
		$this->load->view('admin/footer');
	}
	public function post_berita()
	{
		$this->load->model('berita_model');
		$this->berita_model->tambahberita();
		redirect('admin/berita');
	}
	public function edit_berita()
	{
		$this->load->model('berita_model');
		$data['berita'] = $this->berita_model->getidberita();
		$this->load->view('admin/navbar');
		$this->load->view('informasi/berita_edit', $data);
		$this->load->view('admin/footer');
		
	}
	public function ngedit_berita()
	{
		$this->load->model('berita_model');
		$this->berita_model->editberita();
		redirect('admin/berita');
		
	}
	public function hapus_berita()
	{
		$this->load->model('berita_model');
		$this->berita_model->hapusberita();
		redirect('admin/berita');
	}
}
