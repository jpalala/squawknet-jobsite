<?php

class Security extends CI_Model{
	/*
		return true if it is an employer/recruiter
*/
	function is_jobposter($uid)
	{
		$q = $this->db->get_where('users', array('id' => $uid), 1, 0);
		foreach ($q->result() as $row)
		{
			$accountlvl = $row->account;
		}
		
		return ($accountlvl >= 2) ?  true :  false;
	
	}
	
	function is_jobseeker($uid) {
		
		$q = $this->db->get_where('users', array('id' => $uid), 1, 0);
		foreach ($q->result() as $row) {
		$accountlvl = $row->account;
			
		}
		return ($accountlvl==1) ?  true :  false;
	}
	
	function is_admin($uid)
	
		$q = $this->db->get_where('users', array('id' => $uid), 1, 0);
		foreach ($q->result() as $row) {
		$accountlvl = $row->account;	
		}
		return ($accountlvl==0) ?  true :  false;
	}

	function  hash($password)
	{
		$salt = 'saltyftp13';
		return tachyonize($salt,$password);		
	}
}
?>
