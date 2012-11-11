<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topics extends CI_Controller {

    public function show_all()
    {
        $this->load->model('topic_model');
        
        $topics = $this->topic_model->get_topics();
        
        $data = array( 'topics' => $topics );
        
        $this->load->view('topics/all_view', $data);
    }
        
}