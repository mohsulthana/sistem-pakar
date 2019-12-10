<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['pasien'] = $this->m_data->tampil_data2()->result();
		$this->load->view('admin/admin', $data);
	}
	public function login()
	{
		$this->load->view('admin/login');
	}


	//DATA PENYAKIT
	public function datapenyakit()
	{
		$data['penyakit'] = $this->m_data->tampil_data1()->result();
		$this->load->view('admin/datapenyakit', $data);
	}
	public function tambahpenyakit()
	{
		$this->load->view('admin/tambahpenyakit');
	}

	function editpenyakit($id_penyakit){
		$where = array('id_penyakit' => $id_penyakit);
		$data['penyakit'] = $this->m_data->edit_data($where,'penyakit')->result();
		$this->load->view('admin/editpenyakit',$data);
	}

	public function tambah_aksi1(){
		$id_penyakit = $this->input->post('kode_p');
		$nama_penyakit = $this->input->post('nama_p');
 
		$data = array(
			'id_penyakit' => $id_penyakit,
			'nama_penyakit' => $nama_penyakit,
			);
		$this->m_data->input_data1($data,'penyakit');
		redirect('admin/datapenyakit');
	}

	function hapuspenyakit($id_penyakit){
		$where = array('id_penyakit' => $id_penyakit);
		$this->m_data->hapus_data($where,'penyakit');
		redirect('admin/datapenyakit');
	}

	function update1(){
	$id_penyakit = $this->input->post('kode_p');
	$nama_penyakit = $this->input->post('nama_p');
	$solusi = $this->input->post('solusi');
	$obat = $this->input->post('obat');
	
	$data = array(
		'id_penyakit' => $id_penyakit,
		'nama_penyakit' => $nama_penyakit,
		'solusi' => $solusi,
		'obat' => $obat,
	);

	$where = array(
		'id_penyakit' => $id_penyakit
	);

	$this->m_data->update_data($where,$data,'penyakit');
	redirect('admin/datapenyakit');
}


	//DATA GEJALA PENYAKIT
	public function datagejala()
	{
		$data['gejala'] = $this->m_data->tampil_data()->result();
		$this->load->view('admin/datagejala', $data);
	}

	public function tambahgejala(){
		$this->load->view('admin/tambahgejala');
	}

	public function tambah_aksi(){
		$id_gejala = $this->input->post('kode_g');
		$nama_gejala = $this->input->post('nama_g');
 
		$data = array(
			'id_gejala' => $id_gejala,
			'nama_gejala' => $nama_gejala,
			);
		$this->m_data->input_data($data,'gejala');
		redirect('admin/datagejala');
	}

	function editgejala($id_gejala){
		$where = array('id_gejala' => $id_gejala);
		$data['gejala'] = $this->m_data->edit_data($where,'gejala')->result();
		$this->load->view('admin/editgejala',$data);
	}

	function hapusgejala($id_gejala){
		$where = array('id_gejala' => $id_gejala);
		$this->m_data->hapus_data($where,'gejala');
		redirect('admin/datagejala');
	}

	function update(){
	$id_gejala = $this->input->post('kode_g');
	$nama_gejala = $this->input->post('nama_g');
	
	$data = array(
		'id_gejala' => $id_gejala,
		'nama_gejala' => $nama_gejala,
	);

	$where = array(
		'id_gejala' => $id_gejala
	);

	$this->m_data->update_data($where,$data,'gejala');
	redirect('admin/datagejala');
}

	//DATA RULE BASE
	public function datarule()
	{
		$this->load->view('admin/datarule');
	}

	public function tambahrule()
	{
		$this->load->view('admin/tambahrule');
	}

	//DATA PASIEN
	public function datapasien()
	{
		$data['pasien'] = $this->m_data->tampil_data2()->result();
		$this->load->view('admin/datapasien', $data);
	}
	function hapuspasien($id_pasien){
		$where = array('id_pasien' => $id_pasien);
		$this->m_data->hapus_data($where,'pasien');
		redirect('admin/datapasien');
	}
	

	

	


	

	

	

	
   
  

 public function __construct(){
		parent::__construct();		
			$this->load->model('m_data');
	        $this->load->helper('url');
	}


 

}