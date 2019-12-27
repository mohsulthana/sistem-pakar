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

	public function hitung()
	{
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
		// INIT ARRAY, JUMLAH PERTANYAAN, GEJALA PENYAKIT
		$q = [];
		$n = 17;
		$gejala = [
			'Typhoid' 			=> [1,4,8,10,15,17],
			'DBD' 				=> [1,9,11,13,16,17],
			'Gastroentritis' 	=> [2,6,10,12,14],
			'Dispepsia' 		=> [3,7,10,12]
		];
		$count_gejala = [
			'Typhoid' 			=> 0,
			'DBD' 				=> 0,
			'Gastroentritis' 	=> 0,
			'Dispepsia' 		=> 0
		];

		// AMBIL ISI VALUE FORM
		for ($i = 1; $i <= $n ; $i++) {
			$q[$i-1] = $this->input->post("q".$i);
			// CEK VALUE APAKAH TERMASUK GEJALA PADA PENYAKIT DI ARRAY GEJALA
			foreach ($gejala as $key => $value) {
				if(in_array($q[$i-1], $value))
					$count_gejala[$key]++;
			}
		}

		// HITUNG PRESENTASE PENYAKIT
		$penyakit = [];
		foreach ($count_gejala as $key => $value) {
			$penyakit[$key] = $value/count($gejala[$key])*100;
			$penyakit[$key] = number_format((float)$penyakit[$key], 2, '.', '')."%";
		}
		echo "<pre>";
		print_r ($q);
		print_r ($count_gejala);
		print_r ($penyakit);
		echo "</pre>";exit;

		$data = array(
			'awal' => $awal,
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

