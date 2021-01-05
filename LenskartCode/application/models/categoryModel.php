<?php
class categoryModel extends CI_Model
{
	public function categoryInsert($data)
	{
		$this->db->insert("tbl_category",$data);
	}
	public function categorySelect()
	{
		return $this->db->get('tbl_category');
	}
	public function categoryDelete($categoryId)
	{
		$this->db->where("categoryId",$categoryId);
		return $this->db->delete('tbl_category');
	}
	public function categoryEditForm($editId){
		$this->db->where("categoryId",$editId);
		return $this->db->get("tbl_category");
	}
	public function updateCategory($data,$id){
		$this->db->where("categoryId",$id);
		$this->db->update("tbl_category",$data);
	}
}
?>
