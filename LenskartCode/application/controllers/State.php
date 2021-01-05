<?php
class State extends CI_Controller
{
	public function __construct()
	{
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->model("stateModel");
	}
	public function index()
		{
			$data["state"]="State Model";
			$data["page"]="State/stateModel";
			$data["countrySelect"] = $this->stateModel->countrySelect();
			$this->load->view("TemplateAdmin/content",$data);
		}
		public function stateListing()
		{
			$data["page"]="State/stateListing";
			$data["stateListing"]="State Model";
			$data['state'] = $this->stateModel->slectState();
			$this->load->view("TemplateAdmin/content",$data);
		}
		public function formValidationState()
		{
			$this->form_validation->set_rules('countryName','Country Name A Enter','required');
			$this->form_validation->set_rules('stateName','State Name a Enter','required|alpha');
			if($this->form_validation->run()){
						$dataState = array(
							"countryId"=>$this->input->post('countryName'),
							"stateName"=>$this->input->post("stateName")
						);
						if(isset($_POST["stateUpdate"])){
							$this->stateModel->stateUpdate($dataState,$this->input->post("stId"));
							redirect(base_url()."State/updateMsg");
						}
				if(isset($_POST["stateInsert"])){
						$this->stateModel->stateInsert($dataState);
						redirect(base_url()."State/insertedStateMsg");
				}
			}else{
				$this->index();
			}
		}

		public function insertedStateMsg()
		{
			$this->index();
		}
		public function deleteState()
		{
			$userState = $this->uri->segment(3);
			$this->stateModel->stateDelete($userState);
			redirect(base_url()."State/deleteMsg");
		}
		public function deleteMsg()
		{
			$this->stateListing();
		}
		public function editState()
		{
			$stateId = $this->uri->segment(3);
			$data['selectRow'] = $this->stateModel->selectState($stateId);
			$data["page"]="State/stateModel";
			$data["countrySelect"] = $this->stateModel->countrySelect();
			$this->load->view("TemplateAdmin/content",$data);
		}
		public function updateMsg()
		{
			$this->stateListing();
		}
}

?>
