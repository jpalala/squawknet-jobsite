<?php
class Users extends  CI_Controller{
function __construct() { 
	parent::__construct();

	$this->load->helper(array('url','tachyon')); //in case you havent loaded it yet
}
	function login () {
 $this->session->set_userdata("active", TRUE);
		echo "Logged in";
	}
	public function home() {
		$this->load->view('users/login');
	}


	//$.post(user/signup) leads here
	public function signup() {
		if($this->input->post('hidden_val')) {
			$check_hidden = $this->input->post('hidden_val');
			$timenow = time();
			if($check_hidden == md5(date('His'))) {
				echo "<span style=\"color:red\">sorry,1 validation failed</span>";
			} else {
				//check then continue with registration
				if(!$this->input->post('email') || !$this->input->post('username') || !$this->input->post('password')) {
					echo "<span style=\"color:#c00;background:#fff;\">you left some fields blank validation failed</span>";
				} else {
					$password = md5(md5($this->input->post('password')));
					$username = addslashes(strrev($this->input->post('username')));
					$email = $this->input->post('email');
					
					$check = $this->db->query("SELECT username FROM members WHERE username='".$username."'");
					if($check->num_rows() == 0) {
						
						$q = "INSERT INTO members VALUES(NULL,'".$username."','".$password."','".$email."',0,'" . date('Y-m-d H:i:s'). "',NULL)";
						$this->db->query($q);
						$mem_id = $this->db->insert_id();
						
						if($mem_id) { 
							//add to memprofiles database for tpc and fblink
							$this->db->query("INSERT INTO memprofiles VALUES('".$mem_id."','','','','',NULL);");
							
							echo $data['message'] = "You are now registered. You may now <a href=\"" . site_url('login'). "\">login</a>.";
							
						} else { 
							
							echo "Registration failed. Please send me an email (joe@halubilo.com) with the following code: <pre style=\"border:1px #103257 solid;\">";
							
							echo $this->db->error();
							
							echo "</pre>"; 
						}
					} else {
						echo "<span style=\"color:#c00;background:#fff;\">sorry, username exists</span>";
					}
				}
			}
		} else {
				echo "<span style=\"color:#c00;background:#fff;\">sorry, validation failed</span>";
		}
		//		$this->load->view('user/registration');
	}
	
	
	function logout() {
           $this->session->set_userdata("active", FALSE);
	   $this->load->view('logout',$data);
	}
	//lvl = from word to number
	//0 = admin
	//1 = jobseeker 
	//2 = jobposter/employer
	function create_account($email,$username,$password,$lvl) {
		$this->load->model('security');
		
		$encrypt_pass = $this->security->hash($password);
		
		$q = "INSERT INTO users VALUES()";
	}
	
	function register_details($uid,$firstname,$lastname,$github,$linkedin,$portfolio,$about,$age,$sex) {
	
	}
	
	
}
?>
