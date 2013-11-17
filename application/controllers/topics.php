<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topics extends CI_Controller {

    public function index()
    {
        $this->load->model('topic_model');
        $this->load->helper('text');

        $btopics = $this->topic_model->get_topics('beginner');
        $atopics = $this->topic_model->get_topics('advanced');

        $page = array( 'title' => 'Current Topics' );

        $user = $this->session->userdata('user');

        $data = array(
            'page'   => $page,
            'btopics' => $btopics,
            'atopics' => $atopics,
            'user'   => $user
        );

        $this->load->view('topics/all_view', $data);
    }

    public function archive()
    {
        $this->load->model('topic_model');
        $this->load->helper('text');

        $topics = $this->topic_model->get_archived_topics();

        $page = array( 'title' => 'Past Topics' );

        $user = $this->session->userdata('user');

        $data = array(
            'page'   => $page,
            'topics' => $topics,
            'user'   => $user
        );

        $this->load->view('topics/archive_view', $data);
    }

    public function add_to_archive()
    {
        $topicID = $this->input->get('id');
        $this->load->model('topic_model');
        $this->topic_model->archive_topic($topicID);

        redirect('topics');
    }

    public function create()
    {
        $page = array( 'title' => 'Create A New Topic' );

        $user = $this->session->userdata('user');

        $data = array(
            'page' => $page,
            'user' => $user
        );

        $this->load->library('form_validation');

        $this->form_validation->set_rules('title', 'Title', 'required|trim|max_length[255]');
        $this->form_validation->set_rules('description', 'Description', 'required|trim');

        $this->load->model('topic_model');

        if ( $this->form_validation->run() === FALSE ) {
            $data['tags'] = $this->topic_model->get_tags();

            $this->load->view('topics/create_view', $data);
        } else {
            $new_topic = array(
                'title'       => $this->input->post('title'),
                'description' => $this->input->post('description'),
                'user_id'     => $this->input->post('user_id'),
				'level'       => $this->input->post('level'),
                'tags'        => $this->input->post('tags')
            );

            $topic_id = $this->topic_model->create_topic( $new_topic );

            redirect('topics');
        }
    }

    public function show( $topic_id )
    {
        $this->load->model('topic_model');

        $topic = $this->topic_model->get_topic( $topic_id );

        $page = array( 'title' => 'Current Topics' );

        $user = $this->session->userdata('user');

        $data = array(
            'page'  => $page,
            'topic' => $topic,
            'user'  => $user
        );

        $this->load->view('topics/show_view', $data);
    }

    public function add_vote( $topic_id )
    {
        $this->load->model('topic_model');

        $this->topic_model->add_vote($topic_id);
    }

    public function remove_vote( $topic_id )
    {
        $this->load->model('topic_model');

        $this->topic_model->remove_vote($topic_id);
    }

}
