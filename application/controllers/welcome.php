<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		if (!$this->session->userdata('email')) {
			
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', 
		['valid_email' => 'Must contain a valid email address.']);

		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) 
		{
		$data['page'] = 'login';
		$data['title'] = 'Login';
		$this->load->view('index/index',$data);
		} 
		else 
		{
			$this->_do_login();
		}

		}
	}

	private function _do_login(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		// usernya ada
		if ($user) {

			if ($user['is_active'] == 1) {
				//cek password
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('user');
					}else {
						redirect('user');
					}
				} else {
					$this->session->set_flashdata('k', '<div class="alert alert-danger" role="alert">Password is wrong!</div>');
				
					redirect('welcome');
				}
			} else {
				$this->session->set_flashdata('k', '<div class="alert alert-danger" role="alert">Email is not been activated!</div>');
				
				redirect('welcome');
			}
		} else {
			$this->session->set_flashdata('k', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			
			redirect('welcome');
		}
	}

	function register(){

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('no_hp', 'No HP', 'trim|required|numeric');
		$this->form_validation->set_rules(
			'email',
			'Email',
			'trim|required|valid_email|is_unique[user.email]',
			[
				'is_unique' => 'This email has been used!'
			]
		);
		$this->form_validation->set_rules(
			'password1',
			'Password',
			'trim|required|min_length[5]|matches[password2]',
			[
				'matches' => 'Password dont match!',
				'min_length' => 'Password to short!'
			]
		);
		$this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');

		if ($this->form_validation->run() == false) {

			$data['page'] = 'register';
			$data['title'] = 'Register';
			$this->load->view('index/index',$data);
		} else {
			//array
			$data = [
				'nama' => htmlspecialchars($this->input->post('nama', true)), //htmlspecialchars/true untuk menghindari XSS/cross site scripting yang merupakan salah satu jenis serangan injeksi code (code injection attack)
				'email' => htmlspecialchars($this->input->post('email', true)),
				'no_hp' => htmlspecialchars($this->input->post('no_hp', true)),
				'password' => password_hash(
					$this->input->post('password1'),
					PASSWORD_DEFAULT
				),
				'is_active' => 1,
				'role_id' => 1,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('k', '<div class="alert alert-success" role="alert">Your account has been created</div>');
			redirect('welcome');
		}

	}
}
