<?php
class Banner extends CI_controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		$this->load->model("BannerModels");
	}
	public function index(){
		$data["banner"]="Banner Form";
		$data["page"]="Banner/bannerModel";
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function bannerListing(){

		$data["bannerListing"]="Banner Model";
		$data["page"]="Banner/bannerListing";
		$data["selectImage"]=$this->BannerModels->bannerSelect();
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function formValidation()
	{
		$this->form_validation->set_rules("bannerName", "Enter Banner Name", "required");
		//$this->form_validation->set_rules("bannerFile", "Select File Please gif|jpg|png", "required");
		if ($this->form_validation->run()) {
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('bannerFile'))
			{
				$error = array('error' => $this->upload->display_errors());
				echo "<pre>";
				print_r($error);
				die();
			}
			else{
				$data['bannerFile']=$this->upload->data('file_name');

				$insertBanner =array(
						"bannerName"=>$this->input->post("bannerName"),
						"bannerImage"=>$data["bannerFile"]
				);
				if(isset($_POST["bannerUpdate"])){

					$this->db->where("bannerId",$this->input->post('hiddenId'));
					$data = $this->db->get("tbl_banner")->row();
					$this->BannerModels->update($insertBanner,$this->input->post('hiddenId'));
					redirect(base_url()."Banner/updateMsg");
				}
				if(isset($_POST["bannerInsert"])) {
					$this->BannerModels->insertBanner($insertBanner);
					redirect(base_url() . "Banner/bannerMsg");
				}
			}
		}else{
			$this->index();
		}
	}

	public function bannerMsg()
	{
		$this->index();
	}
	public function deleteBanner()
	{
		$bannerId = $this->uri->segment(3);
		$this->BannerModels->bannerDelete($bannerId);
		redirect(base_url()."Banner/bannerMsgDelete");
	}
	public function bannerMsgDelete()
	{
		$this->bannerListing();
	}
	public function editBanner()
	{
		$editId= $this->uri->segment(3);
		$data["editRow"] = $this->BannerModels->selectEditForm($editId);
		$data["page"]="Banner/bannerModel";
		$this->load->view("TemplateAdmin/content",$data);
	}
	public function updateMsg()
	{
		$this->index();
	}

}
?>
