<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function lihat_info(){
		$this->load->view('biodata');

	}

	public function jumlah_angka($angka1, $angka2) {
		if (isset($angka1) || isset($angka2)) {
			echo "angka ke-1:$angka1<br/>";
			echo "angka ke-2:$angka2<br/>";
			$hasil = $angka1 + $angka2;
			echo "hasil penjumlahan : $hasil";
		} else {
			echo "anda sesat";
		}
		
	}
}
