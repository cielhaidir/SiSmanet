<?php 

class berita_model extends CI_Model {

	public function getberita(){
		$this->load->tassmanet();
	
		$sql = "SELECT * FROM berita";
		
		$hasil = $this->db->query($sql);

		// jabarkan hasil
		$data = $hasil->result_array();
		// echo '<pre>';print_r($data);echo '</pre>';
		return $data;
	}
	public function tambahberita(){
		$this->load->tassmanet();
		
		$judul = $_POST['Judul'];
		$berita = $_POST['berita'];
		// $author = $_POST['id_author'];
		$sql = "INSERT INTO berita (id_berita,judul,isi_berita) VALUES ('','$judul', '$berita')";

		$this->db->query($sql);
	}
	public function getidberita(){
		$this->load->tassmanet();

		$idberita = $this->input->get('id_berita');
		$sql = "SELECT * FROM berita where id_berita=$idberita";
		$hasil = $this->db->query($sql);
		$data = $hasil->result_array();
		return $data;
	}
	public function editberita(){
		$this->load->tassmanet();

		$idberita = $_POST['id_berita'];
		$judul = $_POST['Judul'];
		$berita = $_POST['berita'];
		$sql = "UPDATE berita
		SET
			judul='$judul',
			isi_berita='$berita'
		WHERE
		id_berita='$idberita'";
		$this->db->query($sql);
	}
	public function hapusberita(){
		$this->load->tassmanet();

		$idberita = $this->input->get('id_berita');
		$sql = "DELETE FROM berita where id_berita='$idberita'";
		$this->db->query($sql);
	}
}
