<?php
class cityModel extends CI_Model
{
	public function countrySelectForm(){
		return	$this->db->get("tbl_county");
	}
	public function stateSelectForm(){
		return	$this->db->get("tbl_state");
	}
	public function cityAdd($data){
		$this->db->insert("tbl_city",$data);
	}
	public function selectCity(){
		$this->db->from("tbl_city as city");
		$this->db->join("tbl_county as country","country.countryId=city.countryId","left");
		$this->db->join("tbl_state as state","state.stateId=city.stateId","left");
		return $this->db->get();
	}
	public function deleteCity($cityId)
	{
		$this->db->where("cityId",$cityId);
		return $this->db->delete("tbl_City");
	}
	public function citySelectEdit($citEdit)
	{
		$this->db->from("tbl_city as city");
		$this->db->join("tbl_county as country","country.countryId=city.countryId","left");
		$this->db->join("tbl_state as state","state.stateId=city.stateId","left");
		$this->db->where("city.cityId",$citEdit);
		return $this->db->get();
	}
	public function updateCity($data,$id)
	{
		$this->db->where("cityId",$id);
		$this->db->update("tbl_city",$data);
	}
}
?>
