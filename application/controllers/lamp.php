<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lamp extends CI_Controller {

    function index()
    {
        $data = array( 
            'user' => $this->session->userdata('user')
        );

        $this->load->view('home', $data);
    }
    
}
