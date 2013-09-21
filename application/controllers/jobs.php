<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Jobs extends CI_Controller
{

    public function index()
    {
        $this->load->view( 'jobs/all_view' );
    }

    public function create()
    {
        $this->load->view( 'jobs/create_view' );
    }

    public function show( $job_id )
    {
        $this->load->view( 'jobs/show_view' );
    }

}
