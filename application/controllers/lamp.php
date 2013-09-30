<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lamp extends CI_Controller {

    function index()
    {
        $this->load->model('meetup_model');

        $upcoming = $this->meetup_model->get_upcoming_meetup();

        $data = array(
            'user'     => $this->session->userdata('user'),
            'upcoming' => $upcoming
        );

        $this->load->view('home', $data);
    }

}
