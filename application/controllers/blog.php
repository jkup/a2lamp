<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	function index()
	{
		$this->load->model('blog_model');
		$query = $this->blog_model->get_posts();

		$data['posts'] = $query->result();

		$this->load->view('blog_view', $data);

	}

	function create($post_id = NULL)
	{
		if(!empty($post_id))
		{
			echo "Send to Model";
		}
		else
		{
			echo "Here's a new post!";
		}
	}
}