<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class eskul extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$data['bg'] = '';
		$this->load->view('template/header', $data);
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}
}
