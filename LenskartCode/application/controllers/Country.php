<?php
class Country extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("countryModel");
		$this->load->library('form_validation');
	}
	public function index(){
		$data['country']="Country Model";
		$data['page']="Country/countryModel";
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function countryListing()
	{
		 $data["page"]="Country/countryListing";
		 $data["countryListing"] ="Country Model";
		 $data['countrySelect'] = $this->countryModel->listingCountry();
		 $this->load->view("TemplateAdmin/content",$data);
	}
	public function  formValidationCountry()
	{
		$this->form_validation->set_rules('country',"Enter a country",'required');
		if($this->form_validation->run()){
			$insertData=array(
					"countryName"=>$this->input->post('country')
			);

			if(isset($_POST["update"])){
				$this->countryModel->updateForm($insertData,$this->input->post('hidden'));
				redirect(base_url()."Country/updateMsg");
			}
			if(isset($_POST["insert"])) {
				$this->countryModel->insertCountry($insertData);
				redirect(base_url() . "Country/insertMsg");
			}
		}else{
		$this->index();
		}
	}

	public function insertMsg()
	{
		$this->index();
	}
	public function deleteForm($id){
		$this->countryModel->delete($id);
		redirect(base_url()."Country/delMsg");
	}
	public function delMsg()
	{
		$this->countryListing();
	}
	public function editForm()
	{
		$countryId = $this->uri->segment(3);
		$data['page']="Country/countryModel";
		$data['singleData'] = $this->countryModel->editSelect($countryId);
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function updateMsg()
	{
		$this->countryListing();
	}
}
?>
