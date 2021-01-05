<?php
class stateModel extends CI_Model
{
	public function countrySelect()
	{
		$queryState = $this->db->get("tbl_county");
		return $queryState;
	}

	public function stateInsert($data){
		$this->db->insert("tbl_state",$data);
	}
	public function slectState()
	{
		$this->db->from('tbl_state as state');
		$this->db->join('tbl_county as country','country.countryId=state.countryId');
		$query = $this->db->get();
		return $query;
	}
	public function stateDelete($user){
		$this->db->where("stateId",$user);
		$this->db->delete("tbl_state");
	}
	public function selectState($stateId)
	{
		$this->db->where("stateId",$stateId);
		$editSelect = $this->db->get("tbl_state");
		return $editSelect;
	}
	public function stateUpdate($data,$id)
	{
		$this->db->where("stateId",$id);
		$update = $this->db->update("tbl_state",$data);
		return $update;
	}
}
?>
