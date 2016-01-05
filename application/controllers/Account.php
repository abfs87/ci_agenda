<?php

	/**
	* 
	*/
	class Account extends CI_Controller {
		
		function __construct()	{
			parent::__construct();
			$this->load->model('account/user_model');
			$this->load->helper('url');
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->library('session');
		}

		public function index() {
			$this->load->view('account/form_login');
		}

		function login(){
			$username = $this->input->post('username','true');
			$password = $this->input->post('password','true');

			$temp_account = $this->user_model->check_user_account($username,$password)->row();
			$num_account = count($temp_account);

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('username', 'Password', 'required');
			if ($this->form_validation->run()==FALSE) {
				$this->load->view('account/form_login');
			} else {
				if ($num_account > 0) {
					$array_items = array(
									'id_user'=>$temp_account->id_user,
									'username'=>$temp_account->username,
									'logged_in'=>true);
					$this->session->userdata($array_items);
					redirect('account/view_success_page');
				} else {
					$this->session->set_flashdata('notification', 'Peringatan : Username & Password tidak cocok');
					redirect(site_url('account'));
				}
				
			}
			
		}
	}

?>