<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lamp extends CI_Controller {

	function index()
	{
		$this->load->view('home');
	}
}