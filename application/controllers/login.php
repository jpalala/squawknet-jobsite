<?php

class Login extends CI_Controller() {

  public function index() {
      $this->load->view('login/main');
  }
  public function member() {
      $this->load->view('members/login');
  }	
}
