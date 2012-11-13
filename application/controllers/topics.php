<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topics extends CI_Controller {

    public function show_all()
    {
        $this->load->model('topic_model');

        $topics = $this->topic_model->get_topics();
        
        $page = array( 'title' => 'Current Topics' );

        $data = array( 
            'page'   => $page,
            'topics' => $topics 
        );

        $this->load->view('topics/all_view', $data);
    }

    public function create()
    {   
        $page = array( 'title' => 'Create A New Topic' );

        $data = array( 
            'page' => $page
        );
        
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|trim|max_length[255]');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');

        if ( $this->form_validation->run() === FALSE ) {
            $this->load->view('topics/create_view', $data);
        } else {            
            $this->load->model('topic_model');
            
            $new_topic = array(
                'title'       => $this->input->post('title'),
                'description' => $this->input->post('description')
            );

            $topic_id = $this->topic_model->create_topic( $new_topic );
            
            redirect('topic/' . $topic_id);
        }
    }
    
    public function show( $topic_id )
    {
        $this->load->model('topic_model');

        $topic = $this->topic_model->get_topic( $topic_id );
        
        $page = array( 'title' => 'Current Topics' );

        $data = array( 
            'page'  => $page,
            'topic' => $topic
        );

        $this->load->view('topics/show_view', $data);        
    }

}