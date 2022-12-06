<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class informasi extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	public function index() {
		$data['bg'] = 'bg-smanet';
		$this->load->view('template/header', $data);
		$this->load->view('informasi');
	}

}
