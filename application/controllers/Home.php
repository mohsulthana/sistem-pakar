<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$this->load->view('inisistem');
	}
	public function login()
	{
		$this->load->view('admin/login');
	}
	public function diagnosa()
	{
		$this->load->view('diagnosa');
	}

	public function diagnosa1()
	{
		$data['gejala'] = $this->m_data->tampil_data()->result();
		$this->load->view('diagnosa1');
	}


	public function tambah_aksi2(){
		$nama = $this->input->post('nama');
		$umur = $this->input->post('umur');
 		$jenis_kelamin = $this->input->post('jenis_kelamin');
 		$email = $this->input->post('email');

		$data = array(
			'nama' => $nama,
			'umur' => $umur,
			'jenis_kelamin' => $jenis_kelamin,
			'email' => $email,


			);
		$this->m_data->input_data1($data,'pasien');
		redirect('home/diagnosa1');
	}

	public function __construct(){
		parent::__construct();		
			$this->load->model('m_data');
	        $this->load->helper('url');
	}
}

