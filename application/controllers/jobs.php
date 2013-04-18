<?php

class Jobs extends CI_Controller {

	//fetch data from database
	public function __construct() {
	 //parent
	 parent::__construct();
	 //connect db
	 $this->load->database();
	 //load model
	 $this->load->model('jobsdb');
	}
	/*
	the default welcome/front page of the site will be here, once config puts this as default controller
	*/
	public function index(){
	$data['page_title'] = 'Squawknet Startup Tech Jobs';
   
	$res = $this->jobsdb->getJobs();
	   
	   
		if ($res)
		{
			$rawhtml = '<table>';
			$i = 0;
		   	foreach($res as $row)
		   	{
				$result[$i]['id'] = $row->id;
				$result[$i]['position'] = $row->position;
				$result[$i]['company'] = $row->company;
				$result[$i]['author'] = $row->author;
				$result[$i]['category'] = $row->category;
				
			}
			
		} else {
			$rawhtml = ""; //check into the view that this is the case
		}
		$this->load('jobs/list',$result);
		$this->load->view('footer');
	}
	
	//show specific job listed on the site jobs/show/JOB_ID
	public function show($id) {
	 
	
	}
	

}
/*controlller


*/
?>
