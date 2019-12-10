<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('admin/login');
	}
	public function actionlogin()
	{
		$username= $_POST["username"];
		$password= $_POST["password"];

		$this->db->where("username",$username);
		$this->db->where("password",$password);

		$check=$this->db->get("user");
		if($check->num_rows()>0){
			$_SESSION["username"]=$username;
			redirect(base_url()."index.php/admin");
		}
	}


}