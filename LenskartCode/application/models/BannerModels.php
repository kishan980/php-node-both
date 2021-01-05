<?php
class BannerModels extends CI_Model
{
		public function insertBanner($insertBanner)
		{
			$this->db->insert("tbl_banner",$insertBanner);
		}
		public function bannerSelect()
		{
			$this->db->select("banner.bannerId,banner.bannerName,banner.bannerImage,banner.bannerStatus");
			$this->db->from("tbl_banner as banner");
			return $query = $this->db->get("");
		}
		public function bannerDelete($userID){
			$this->db->where("bannerId",$userID);
			$data = $this->db->get("tbl_banner")->row();
			unlink("upload/".$data->bannerImage);
			$this->db->where("bannerId",$userID);
			$this->db->delete("tbl_banner");
		}
		public function selectEditForm($editId)
		{
			$this->db->select("banner.bannerId,banner.bannerName,banner.bannerImage,banner.bannerStatus");
			$this->db->from("tbl_banner as banner");
			$this->db->where("banner.bannerId",$editId);
			return $query = $this->db->get("");
		}
		public function update($data,$id)
		{
			$this->db->where("bannerId",$id);
			$this->db->update("tbl_banner",$data);
		}
}
