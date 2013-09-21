<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Jobs extends CI_Controller
{

    public function index()
    {
        $user = $this->session->userdata('user');

        $data = array(
            'user' => $user
        );

        $this->load->view( 'jobs/all_view', $data );
    }

    public function create()
    {
        $user = $this->session->userdata('user');

        $data = array(
            'user' => $user
        );

        $this->load->view( 'jobs/create_view', $data );
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
