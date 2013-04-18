<?php
class Forgot extends CI_Controller {

	function password() {
		$this->load->helper('form');
		
		$this->load->view('forgot_pass');
	}
}
?>
