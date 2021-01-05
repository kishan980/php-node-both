<?php
class product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("productModel");
		$this->load->library("form_validation");
	}
	public function index()
	{
		$data["categorySelect"]=$this->productModel->selectCategory();
		$data["subcategorySelect"]=$this->productModel->selectSubcategory();
		$data["product"]="Product Form";
		$data["page"]="Product/productModel";
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function productListing()
	{
		$data["productShow"]=$this->productModel->productShow();
		$data["product"]="Product Model";
		$data["page"]="Product/productListing";
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function formValidation()
	{
		//$this->form_validation->set_rules("subcategory","Enter subcategory","required");
		$this->form_validation->set_rules("productPrice","Enter Product Price","required|numeric");
		$this->form_validation->set_rules("productDescription","Product Description","required|alpha");
		$this->form_validation->set_rules("productDiscount","Enter a productDiscount","required|numeric");
		$this->form_validation->set_rules("productName","Enter a product","required|alpha");
		$this->form_validation->set_rules("Tag","Enter a Tag","required|alpha");
		$idData = $this->input->post('hidden');
		$this->db->where("ProductId",$idData);
		$dataImg = $this->db->get("tbl_product")->row();

		if($this->form_validation->run()){
			$config['upload_path'] = './ProductImage/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload("productFile"))
			{
				$error = array('error' => $this->upload->display_errors());
				echo "<pre>";
				print_r($error);
				die();
			}else {
				$data['productFile']=$this->upload->data('file_name');

				$productInsert = array(
					"categoryId" => $this->input->post("category"),
					"subcategoryId" => $this->input->post("subcategory"),
					"productName" => $this->input->post("productName"),
					"productPrice" => $this->input->post("productPrice"),
					"productDiscount" => $this->input->post("productDiscount"),
					"productImage"=>$data["productFile"],
					"productTag" => $this->input->post('Tag'),
					"productDescription" => $this->input->post("productDescription")
				);
					if(isset($_POST["productUpdate"])){
						$this->db->where("productId",$idData);
						$data = $this->db->get("tbl_product")->row();
						unlink("ProductImage/".$data->productImage);
						$this->productModel->updateProduct($productInsert,$this->input->post('hidden'));
						redirect(base_url()."Product/productUpMsg");
					}
				if(isset($_POST["productInsert"])){
					$this->productModel->insertProduct($productInsert);
					redirect(base_url()."Product/ProductInsertMsg");
				}
			}
		}else{
			$this->index();
		}
	}
	public function ProductInsertMsg()
	{
		$this->index();
	}
	public function deleteForm()
	{
		$productId = $this->uri->segment(3);
		$this->productModel->delete($productId);
		redirect(base_url()."Product/deleteMsg");
	}
	public function deleteMsg()
	{
		$this->productListing();
	}
	public function editForm(){
		$data["categorySelect"]=$this->productModel->selectCategory();
		$data["subcategorySelect"]=$this->productModel->selectSubcategory();
		$pro = $this->uri->segment(3);
		$data["selectEdit"] = $this->productModel->productSelectEsit($pro);
		$data["page"]="Product/productModel";
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function productUpMsg()
	{
		$this->index();
	}
}
?>
