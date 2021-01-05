<?php
class countryModel extends CI_Model{
		public function insertCountry($dataInsert){
			$this->db->insert("tbl_county",$dataInsert);
		}
		public function listingCountry()
		{
			$result = $this->db->get("tbl_county");
			return $result;
		}
		public function delete($id){
			$this->db->where("CountryId",$id);
			$this->db->delete("tbl_county");
		}
		public function editSelect($id){
			$this->db->where("countryId",$id);
			$querySingle = $this->db->get("tbl_county");
			return $querySingle;
		}
		public function updateForm($data,$id){
			$this->db->where("countryId",$id);
			$update = $this->db->update("tbl_county",$data);
			return $update;
		}
}
?>
