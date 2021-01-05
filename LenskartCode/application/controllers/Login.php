<?php
class Login extends CI_controller{

	public function index(){
		$data["login"]="";
		$this->load->view("Login/login",$data);
	}

	public function ValidationForm()
	{
			$this->load->model("loginModelAdmin");
		    $this->load->library('form_validation');
			$this->form_validation->set_rules("email","Enter You Email","required");
			$this->form_validation->set_rules("password","Enter Your Password","required");
			if($this->form_validation->run()){
			
				$email   	= $this->input->post("email");
				$password   = $this->input->post("password");

			if($this->loginModelAdmin->loginAdmin($email,$password)){	
								$sessionCreate = array(
										'adminEmail'=> $email
								);								
								$this->session->set_userdata($sessionCreate);
								redirect(base_url()."Dashpge/index");
				}else{
						$this->session->set_flashdata('error','Invalida UserName and Password');
						redirect(base_url()."Login/index");
				}

			}else{
				$this->index();
			}
	}

	public function logout()
	{
		$this->session->unset_userdata('adminEmail');
		redirect(base_url().'Login/index');
	}
}
?>	