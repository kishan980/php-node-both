<?php
class City extends CI_Controller
{

	public function __construct()
	{
		parent::__Construct();
		$this->load->library('form_validation');
		$this->load->model("cityModel");
	}
	public function index()
	{
		$data["city"]="City Form";
		$data["page"]="City/cityModel";
		$data["selectCountry"] = $this->cityModel->countrySelectForm();
		$data["selectState"] = $this->cityModel->stateSelectForm();
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function cityListing(){
		$data["page"]="City/cityListing";
		$data["cityListing"]="City Model";
		$data["selectCity"] = $this->cityModel->selectCity();
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function formValidation()
	{
		$this->form_validation->set_rules("countryName","Please Select Country","required");
		$this->form_validation->set_rules("stateName","Please Select State","required");
		$this->form_validation->set_rules("cityName","Please Select cityName","required");
		if($this->form_validation->run()){
			$cityInsertData =array(
					"countryId"=>$this->input->post("countryName"),
					"stateId"=>$this->input->post('stateName'),
					"cityName"=>$this->input->post('cityName')
			);
			if(isset($_POST["cityUpdate"])){
				$this->cityModel->updateCity($cityInsertData,$this->input->post("id"));
				redirect(base_url()."City/updateMsg");
			}
			if(isset($_POST["cityInsert"])) {
				$this->cityModel->cityAdd($cityInsertData);
				redirect(base_url() . "City/cityMsg");
			}
		}else{
			$this->index();
		}
	}
	public function cityMsg()
	{
		$this->index();
	}
	public function deleteCity()
	{
		$cityId = $this->uri->segment(3);
		$this->cityModel->deleteCity($cityId);
		redirect(base_url()."City/deleteMsg");
	}
	public function deleteMsg()
	{
		$this->cityListing();
	}
	public function editCity()
	{
		$cityIdEdit = $this->uri->segment(3);
		$data["cityEdit"]="City FormEdit";
		$data["page"]="City/cityModel";
		$data["editCity"]=$this->cityModel->citySelectEdit($cityIdEdit);
		$data["selectCountry"] = $this->cityModel->countrySelectForm();
		$data["selectState"] = $this->cityModel->stateSelectForm();
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function updateMsg()
	{
		$this->index();
	}
}
?>
