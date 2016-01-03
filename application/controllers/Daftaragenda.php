<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Daftaragenda extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('daftaragenda/agenda_model');
		}

		public function index() {
			$data['daftar_agenda'] = $this->agenda_model->select_all()->result();
			$this->load->view('daftaragenda/daftar_agenda', $data);
		}

		public function tambah_agenda()	{
			$this->load->view('daftaragenda/form_tambah_agenda');
		}

		public function proses_tambah_agenda() {
			$data['nama'] = $this->input->post('nama');
			$data['keterangan'] = $this->input->post('keterangan');
			$this->agenda_model->insert_agenda($data);
			redirect(site_url('daftaragenda'));
		}

		public function edit_agenda($id_agenda)	{
			$data['agenda'] = $this->agenda_model->select_by_id($id_agenda)->row();
			$this->load->view('daftaragenda/form_edit_agenda', $data);			
		}

		public function proses_edit_agenda($id_agenda) {
			$data['nama'] = $this->input->post('nama');
			$data['keterangan'] = $this->input->post('keterangan');
			$id_agenda = $this->input->post('id_agenda');
			$this->agenda_model->update_agenda($id_agenda,$data);
			redirect(site_url('daftaragenda'));
		}

		public function delete_agenda($id_agenda) {
			$this->agenda_model->delete_agenda($id_agenda);
			redirect(site_url('daftaragenda'));
		}
	}
?>