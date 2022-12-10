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
	public function lapor()
	{
		$this->load->model('siswa_model');
		$pelanggaran = $this->siswa_model->insertLaporan();
		$nohp = $this->siswa_model->getnohp();
		// var_dump($pelanggaran);
		// var_dump($nohp);
		// die;
		// redirect('api?tujuan='.$nohp.'&pesan='.$pelanggaran.'');
		header('Location: http://localhost:3000/Sismanet/api?tujuan='.urlencode($nohp['0']['nohp_ortu']).'&pesan='.urlencode($pelanggaran));
		// header('Location: http://localhost:3000/Sismanet/api?' . http_build_query(array(
		// 	'tujuan=' => $nohp,
		// 	'&pesan=' => $pelanggaran
		// )));
	
	}
}
