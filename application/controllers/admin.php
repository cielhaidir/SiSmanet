<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('admin/navbar');
		$this->load->view('admin/admin');
		$this->load->view('admin/footer');
	}
	public function agenda()
	{
		
	}
	public function tambah_agenda()
	{

	}
	public function edit_agenda()
	{
		
	}
	public function hapus_agenda()
	{

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
