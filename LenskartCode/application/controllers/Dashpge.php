<?php
class Dashpge extends CI_controller
{
	public function index()
	{
		$this->load->view("TemplateAdmin/header");
		$this->load->view("TemplateAdmin/Dashpage");
		$this->load->view("TemplateAdmin/footer");
		
	}
}
?>