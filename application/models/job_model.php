<?php

class Job_model extends CI_Model {

	public function add_job($job_data)
	{
		return $this->db->insert('jobs', $job_data);
	}

}