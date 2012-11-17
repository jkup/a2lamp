<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lamp extends CI_Controller {

    function index()
    {
        $page = array( 'title' => 'Current Topics' );

        $data = array( 
            'page' => $page,
            'user' => $this->session->userdata('user')
        );
        
        $this->load->view('home_view', $data);
    }
    
}