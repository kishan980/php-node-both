<?php
class productModel extends CI_Model
{
		public function selectCategory()
		{
			$this->db->select("cat.categoryId,cat.categoryName,cat.categoryStatus");
			$this->db->from("tbl_category as cat");
			return $this->db->get();
		}
		public function selectSubcategory()
		{

			$this->db->select("sub.subcategoryId,sub.subcategoryName,sub.subcategoryStatus");
			$this->db->from("tbl_subcategory as sub");
			return $this->db->get();
		}
		public function insertProduct($data)
		{
			$this->db->insert("tbl_product",$data);
		}
		public function productShow()
		{
			$this->db->from("tbl_product as pro");
			$this->db->join("tbl_category as cat","pro.categoryId=cat.categoryId","left");
			$this->db->join("tbl_subcategory as subCat","pro.subcategoryId	=subCat.subcategoryId","left");
			return $this->db->get();
		}
		public function delete($id){
			$this->db->where("productId",$id);
			$data = $this->db->get("tbl_product")->row();
			unlink("ProductImage/".$data->productImage);
			$this->db->where("productId",$id);
			$this->db->delete("tbl_product");
		}
		public function productSelectEsit()
		{
			$pro = $this->uri->segment(3);
			$this->db->from("tbl_product as pro");
			$this->db->join("tbl_category as cat","pro.categoryId=cat.categoryId","left");
			$this->db->join("tbl_subcategory as subCat","pro.subcategoryId	=subCat.subcategoryId","left");
			$this->db->where("productId",$pro);
			return $this->db->get();
		}
		public function updateProduct($data,$id)
		{
			$this->db->where("productId",$id);
			$this->db->update("tbl_product",$data);
		}

}
