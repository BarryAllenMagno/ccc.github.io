<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index(){
		$this->load->model('queries');
		$chkAdminExist = $this->queries->chkAdminExist();
		$this->load->view('home', ['chkAdminExist' => $chkAdminExist]);
}

	public function adminRegister(){
		$this->load->model('queries');
		$roles = $this->queries->getRoles();
		$chkAdminExist = $this->queries->chkAdminExist();
		$this->load->view('register', ['roles'=>$roles, 'chkAdminExist' => $chkAdminExist]);

	}

	public function adminSignup(){
		$this->form_validation->set_rules('username','Username','required|is_unique[tbl_users.username]|min_length[5]');
		$this->form_validation->set_rules('password','Password','required|min_length[5]');
		$this->form_validation->set_rules('confpwd','Confirm Password','required|matches[password]|min_length[5]');

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if($this->form_validation->run()){
				$data = $this->input->post();
				$data['password'] = sha1($this->input->post('password'));
				$data['confpwd'] = sha1($this->input->post('confpwd'));
				$this->load->model('queries');
				if($this->queries->registerAdmin($data)){
					 $this->session->set_flashdata('message', 'Admin registered successfully!');

					 redirect("welcome/adminRegister");
				}else{
					$this->session->set_flashdata('message', 'Failed to register as Admin');
				 redirect("welcome/adminRegister");
				}
		}else{
				$this->adminRegister();
		}
	}

		public function login(){
			if($this->session->userdata("user_id")){
				redirect('admin/dashboard');
		}
				$this->load->view('login');
	}



		public function signin(){
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password', 'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if($this->form_validation->run()){
					$username = $this->input->post('username');
					$password = sha1($this->input->post('password'));
					$this->load->model('queries');
					$userExist = $this->queries->adminExist($username, $password);
					if($userExist){
						if($userExist->user_id == '1'){
							$sessionData = [
								'college_id'=> $userExist->college_id,
									'user_id' => $userExist->user_id,
									'username' => $userExist->username,
									'email' => $userExist->email,
									'role_id' => $userExist->role_id,
						 ];


						 $this->session->set_userdata($sessionData);
						 redirect('admin/dashboard');
						 }
						 else if($userExist->user_id  > '1'){
							 $sessionData = [
								 	 'college_id'=> $userExist->college_id,
									 'user_id' => $userExist->user_id,
									 'username' => $userExist->username,
									 'email' => $userExist->email,
									 'college_id' => $userExist->college_id,
									 'role_id' => $userExist->role_id,
							];
							$this->session->set_userdata($sessionData);
 						 redirect('admin/dashboard');
						 }
					}else{
						 $this->session->set_flashdata('message', 'Incorrect Email or Password!');
						 redirect('welcome/login');
					}


					}else{
						$this->login();
					}
			}

		public function logout(){
				$this->session->unset_userdata("user_id");
				redirect('welcome/login');
			}

	}
