<?php
class Subcategory extends CI_Controller{

	public function __construct()
	{
			parent::__construct();
			$this->load->model("subCategoryModel");
			$this->load->library("form_validation");
	}
	public function index()
	{
		$data["categorySelect"] = $this->subCategoryModel->categoryGet();
		$data["subcategory"]="Subcategory Form";
		$data["page"]="Subcategory/subcategoryModel";
		$this->load->view("TemplateAdmin/content",$data);
	}

	public function subcategoryListing()
	{
		$data["page"]="Subcategory/subcategoryListing";
		$data["subcategoryListing"]="subcategory Model";
		$data["listingSub"]=$this->subCategoryModel->listingState();
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function formValidation()
	{
		$this->form_validation->set_rules("subcategory","Enter a Subcategory","required");
		$this->form_validation->set_rules("category","Enter a category","required");
		if($this->form_validation->run()){
			$subInsert =array(
						"categoryId"=>$this->input->post('category'),
						"subcategoryName"=>$this->input->post('subcategory'),
			);
			if(isset($_POST["subcategoryUpdate"])){
				$this->subCategoryModel->subCategoryUpdate($subInsert,$this->input->post('hiddenId'));
				redirect(base_url()."Subcategory/updateSubMsg");
			}
			if(isset($_POST["subcategoryInsert"])) {
				$this->subCategoryModel->insertSubCategory($subInsert);
				redirect(base_url() . "Subcategory/insertMsgSub");
			}
		}else{
			$this->index();
		}
	}
	public function insertMsgSub()
	{
		$this->index();
	}
	public function deleteSubcategory(){
		$subcategoryId = $this->uri->segment(3);
		$this->subCategoryModel->deleteSub($subcategoryId);
		redirect(base_url()."Subcategory/deleteMegSub");
	}

	public function deleteMegSub()
	{
		$this->subcategoryListing();
	}
	public function formEditSubcategory(){
		$id = $this->uri->segment(3);
		$data["sub"]=$this->subCategoryModel->selectRow($id);
		$data["categorySelect"] = $this->subCategoryModel->categoryGet();
		$data["subcategory"]="Subcategory Form";
		$data["page"]="Subcategory/subcategoryModel";
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function updateSubMsg()
	{
		$this->index();
	}
}
?>
