<?php
/*model for loading the jobs */
class JobsDB extends CI_model{
	public function getLinks() {
		$this->db->select('joblinks.id,joblinks.linktext,joblinks.joblink,joblinks.website,joblinks.poster, joblinks.posted,categories.category,users.username');
 		$this->db->from('joblinks');

 $this->db->join('categories', 'categories.id = joblinks.category');
 $this->db->join('users', 'users.id = joblinks.poster');
	$this->db->order_by('joblinks.category','asc');	
	$res =$this->db->get(); 
	
		return $res->result();
	}
	
	/* List jobs posted for the previous 2 months,
		displayed in the frontpage */
	public function getJobs() {
	
	     //calcuate date two months ago
		if(date('n') >= 3) {
			$two_months =  date('Y-m-d',mktime(0,0,0,date('n')-2,date('j'),date('Y')));
		} else {
			$yester_year = date('Y') - 1;
			
			$calc_month = abs(date('n') - 2);
			$yester_month = 12 - $calc_month;
			$two_months  =  date('Y-m-d',mktime(0,0,0,$yester_month,date('j'),$yester_year));
		}
		
		$this->db->select('jobs.id,
		jobs.company,
		jobs.position,
		jobs.requirements,
		jobs.author,
		categories.category'
		);
		
		
 		$this->db->from('jobs');

		$this->db->join('categories', 'categories.id = jobs.categoryid');
		
		$this->db->where('jobs.created  >=', $two_months);
		$this->db->where('jobs.created <=', date('Y-m-d'));

		$this->db->order_by('jobs.created','asc');		
		$res =$this->db->get(); 
	
		return $res->result();
	}

	/* List jobs released for the previous 2 months, displayed in front */
	public function getJobDetails($jobId) {
		
		
		$this->db->select('jobs.*, categories.category');
		
		
 		$this->db->from('jobs');

		$this->db->join('categories', 'categories.id = jobs.categoryid');
		
		$this->db->where('id =', $jobId);	
		$res =$this->db->get(); 
	
		return $res->result();
	}
	
}
