<?php 
class loginModelAdmin extends CI_Model{

		public function loginAdmin($email,$password)
		{
			$this->db->where('adminEmail',$email);
			$this->db->where('adminPassword',$password);
			$get = $this->db->get('tbl_admin_user');

			if($get->num_rows()>0){
				return true;
			}else{
				return false;
			}

		}
}

?>