<?php
class subCategoryModel extends CI_Model{

		public function categoryGet()
		{
			return $this->db->get("tbl_category");
		}
		public function insertSubCategory($data)
		{
			 $this->db->insert("tbl_subcategory",$data);
		}
		public function listingState()
		{
			$this->db->from("tbl_subcategory as sub");
			$this->db->join("tbl_category as cat","cat.categoryId=sub.categoryId","left");
			return $this->db->get();
		}
		public function deleteSub($subId){
			$this->db->where("subcategoryId",$subId);
			$this->db->delete("tbl_subcategory");
		}
		public function selectRow($subId)
		{
			$this->db->where("subcategoryId",$subId);
			return	$this->db->get("tbl_subcategory");
		}
		public function subCategoryUpdate($data,$id){
			$this->db->where("subcategoryId",$id);
			$up = $this->db->update("tbl_subcategory",$data);
			echo "<pre>";
			print_r($up);

		}
}
