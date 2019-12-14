<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('gejala');//Menampilkan Data Gejala Penyakit ke dalam Table Admin
	}

	function tampil_data1(){
		return $this->db->get('penyakit');//Menampilkan Data Penyakit ke dalam Table Admin
	}

	function tampil_data2(){
		return $this->db->get('pasien');//Menampilkan Data Pasien ke dalam Table Admin
	}

	function tampil_data3(){
		return $this->db->get('rulebase');//Menampilkan Data Pasien ke dalam Table Admin
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);// Function untuk menginputkan data ke dalam database table gejala
	}

	function input_data1($data,$table){
		$this->db->insert($table,$data);// Function untuk menginputkan data ke dalam database table penyakit
	}

	function input_data3($data,$table){
		$this->db->insert($table,$data);// Function untuk menginputkan data ke dalam database table penyakit
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}


	function update_data($where,$data,$table){
		$this->db->where($where);
		return $this->db->update($table,$data);
		
	}

	
}

