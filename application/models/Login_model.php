<?php
class Login_model extends CI_model
{
	// ghi dde bien table trong My_model
	var $table='admin';
	 function check_exists($where = array())
    {
	    $this->db->where($where);
	    //thuc hien cau truy van lay du lieu
		$query = $this->db->get('admin');
		
		if($query->num_rows() > 0){
			return TRUE;
		}else{
			return FALSE;
		}
	}

}
