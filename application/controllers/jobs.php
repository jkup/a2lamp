<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Jobs extends CI_Controller
{

    public function index()
    {
        $this->load->view( 'jobs/all_view' );
    }

}
