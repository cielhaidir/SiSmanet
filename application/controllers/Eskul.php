<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eskul extends CI_Controller
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
		$this->load->view('eskul');

	}
	public function id()
	{

	}
}
