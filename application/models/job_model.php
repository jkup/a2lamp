<?php

class Job_model extends CI_Model {

	public function add_job($job_data)
	{
		return $this->db->insert('jobs', $job_data);
	}

	public function get_jobs()
	{
		$query = $this->db->get('jobs');

		$jobs = array();

		foreach ($query->result() as $job)
		{
			$jobs[] = $job;
		}

		return $jobs;
	}

}