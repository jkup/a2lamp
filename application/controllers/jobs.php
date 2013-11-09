<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Jobs extends CI_Controller
{

    public function index()
    {
        $user = $this->session->userdata('user');
            
        // load the job model
        $this->load->model('job_model');

        $jobs = $this->job_model->get_jobs();

        $data = array(
            'user' => $user,
            'jobs' => $jobs
        );

        $this->load->view( 'jobs/all_view', $data );
    }

    public function create()
    {
        $user = $this->session->userdata('user');

        $data = array(
            'user' => $user
        );

        $job_data = $this->input->post();

        if ( ! empty($job_data) && is_array($job_data) ) {
            // load the job model
            $this->load->model('job_model');

            // attempt to add the job to the DB
            $result = $this->job_model->add_job($job_data);

            // did it work?
            if ( $result === true ) {
                echo('Job posted successfully!');
            } else {
                echo('There was an error posting your job.  Sorry about that... :/');
            }
        } else {
            $this->load->view( 'jobs/create_view', $data );
        }
    }

    public function show( $job_id )
    {
        $user = $this->session->userdata('user');

        $data = array(
            'user' => $user
        );

        $this->load->view( 'jobs/show_view', $data );
    }

}
