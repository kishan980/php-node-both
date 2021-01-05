<?php
class Category extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('categoryModel');
		$this->load->library("form_validation");
	}

	public function index(){
		$data["category"]="category Form";
		$data["page"]="Category/categoryModel";
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function categoryListing()
	{
		$data["page"]="Category/categoryListing";
		$data["categoryListing"]="Category Model";
		$data["categoryTable"]=$this->categoryModel->categorySelect();
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function formValidation()
	{
		$this->form_validation->set_rules("category","Category Enter","required");
		if($this->form_validation->run()) {
			$categoryInsert = array(
				"categoryName" => $this->input->post('category')
			);
			if(isset($_POST["categoryUpdate"])){
				$this->categoryModel->updateCategory($categoryInsert,$this->input->post("catId"));
				redirect(base_url()."Category/categoryUpdateMsg");
			}
			if (isset($_POST["categoryInsert"])){
				$this->categoryModel->categoryInsert($categoryInsert);
			redirect(base_url() . "Category/insertMsg");
		}
		}else{
			$this->index();
		}
	}
	public function insertMsg()
	{
		$this->index();
	}
	public function categoryDelete()
	{
		$categoryId = $this->uri->segment(3);
		$this->categoryModel->categoryDelete($categoryId);
		redirect(base_url()."Category/categoryDelMsg");
	}
	public function categoryDelMsg()
	{
		$this->categoryListing();
	}
	public function categoryEdit()
	{
		$catId = $this->uri->segment(3);
		$data["categorySingleRow"]=$this->categoryModel->categoryEditForm($catId);
		$data["category"]="category Form";
		$data["page"]="Category/categoryModel";
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function categoryUpdateMsg(){
		$this->index();
	}

}
?>
