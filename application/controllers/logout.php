<?php 

class Logout extends CI_Controller {
    function __construct() {
         parent::__construct();
         //library session autoloaded in configuration
    }
    function index() {
     
        
        $this->session->sess_destroy();
        $this->session->sess_create();
        $this->session->set_flashdata('message_login','You have successfully logged out');
        redirect('login');
    }  
}

