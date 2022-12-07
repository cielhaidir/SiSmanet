<?php 

class siswa_model extends CI_Model {

	public function getdatasiswa(){
		$this->load->database();
		
		$kelas = $_POST['kelas'];
		$sql = "SELECT * FROM siswa where kelas='$kelas'";
		echo $kelas;
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
}
