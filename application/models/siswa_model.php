<?php

class siswa_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getdatasiswa()
	{

		$kelas = $this->input->post('kelas');
		$tingkatan = $this->input->post('tingkatan');
		$date = getdate();
		$datenow = $date['year'] . '-' . $date['mon'] . '-' . $date['mday'];
		$akt = date('Y', strtotime('-'.$tingkatan.' year', strtotime($datenow)) );
		

		$sql = "SELECT * FROM siswa where kelas='$kelas' AND angkatan=$akt";
		echo $kelas;
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
	public function getnohp()
	{

		$nis = $this->input->post('nis');
		$sql = "SELECT nama_siswa, nohp_ortu FROM siswa where nis='$nis'";
		// echo $kelas;
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
	public function insertLaporan()
	{

		$nis = $this->input->post('nis');
		$pelanggaran = $this->input->post('pelanggaran');
		$input1 = $this->input->post('input1');

		if ($pelanggaran == 1) {
			$sql = "INSERT INTO pelanggaran (id_pelanggaran, nis, nip_guru, JenisPelanggaran) VALUES (NULL, '$nis', '123', '$input1' );";
			$this->db->query($sql);
			return $input1;
		} else {
			$sql = "INSERT INTO pelanggaran (id_pelanggaran, nis, nip_guru, JenisPelanggaran) VALUES (NULL, '$nis', '123', '$pelanggaran');";
			$this->db->query($sql);
			return $pelanggaran;
		}
	}
	public function hitungpelanggaran(){
		$sql = "SELECT Count(id_pelanggaran) as jumlah from pelanggaran";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}
}
