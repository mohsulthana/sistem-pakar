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


	public function hasil(){

		$nama = $this->input->post('nama');
		$umur = $this->input->post('umur');
		$kelamin = $this->input->post('kelamin');
		$alamat = $this->input->post('alamat');
		// INIT ARRAY, JUMLAH PERTANYAAN, GEJALA PENYAKIT
		$q = [];
		$n = 17;
		$gejala = [
			'Penyakit Typhoid' 			=> [1,4,8,10,15,17],
			'Demam Berdarah Dengue (DBD)' 				=> [1,9,11,13,16,17],
			'Gastroentritis' 	=> [2,6,10,12,14],
			'Dispepsia' 		=> [3,7,10,12]
		];
		$count_gejala = [
			'Penyakit Typhoid' 			=> 0,
			'Demam Berdarah Dengue (DBD)' 				=> 0,
			'Gastroentritis' 	=> 0,
			'Dispepsia' 		=> 0
		];
		$this->data['gejala'] = [];
		$numb_gejala = [];
		// AMBIL ISI VALUE FORM
		for ($i = 1; $i <= $n ; $i++) {
			$q[$i-1] = $this->input->post("q".$i);

			
			
			if ($q[$i-1] != NULL) {
				$this->data['gejala'] = $q[$i-1];
				//  get only number
				if (preg_match('/[0-9]/', $this->data['gejala'], $extracted)) {
					// print_r($string);
					$string = implode(',', $extracted);
					$numb_gejala[] = $string;
				}
				foreach ($gejala as $key => $value) {
					if(in_array($q[$i-1], $value))
						$count_gejala[$key]++;
				}
			}
			// CEK VALUE APAKAH TERMASUK GEJALA PADA PENYAKIT DI ARRAY GEJALA
		}

		// HITUNG PRESENTASE PENYAKIT
		$penyakit = [];
		foreach ($count_gejala as $key => $value) {
			$penyakit[$key] = $value/count($gejala[$key])*100;
			$penyakit[$key] = number_format((float)$penyakit[$key], 2, '.', '')." %";
		}
		$this->data['gejala'] = $q;

		foreach($penyakit as $key => $value) {
			$tertinggi = max($penyakit);

			if ($value === $tertinggi) {
				$this->data['hasil'] = $key . ' ' . $value;
				$this->data['nama_penyakit'] = $key;
			}
		}

		$this->data['info_penyakit'] = $this->db->get_where('penyakit', ['nama_penyakit' => $this->data['nama_penyakit']])->result()[0];
		$id_penyakit = $this->data['info_penyakit']->id_penyakit;

		$this->data['identitas'] = array(
			'nama' => $nama,
			'umur' => $umur,
			'jenis_kelamin' => $kelamin,
			'alamat' => $alamat,
			'diagnosa'	=> $id_penyakit
		);

		$insert = $this->m_data->input_data1($this->data['identitas'],'pasien');
		$id = $this->db->insert_id();
		foreach ($numb_gejala as $key => $value) {
			$data = [
				'gejala' => json_encode($numb_gejala)
			];
			$this->db->where('id_pasien', $id)->update('pasien', $data);
		}
		$this->load->view('hasil', $this->data);
	}

	public function __construct(){
		parent::__construct();		
			$this->load->model('m_data');
	        $this->load->helper('url');
	}
}

