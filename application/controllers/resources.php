<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {

    public function index()
    {
        $data = array();

        $this->load->view( 'resources/all_view', $data );
    }
}