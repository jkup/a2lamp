<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic_model extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();        
        
        $this->load->database();
    }
    
    public function get_topics()
    {
        $topics = array();

        $query = $this->db->get('topics');

        foreach ( $query->result() as $topic ) {
            $topics[] = $topic;
        }
        
        return $topics;
    }
    
}
    