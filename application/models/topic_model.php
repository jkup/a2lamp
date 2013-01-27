<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic_model extends CI_Model {

    public function get_topics()
    {
        $topics = array();
        
        $user = $this->session->userdata('user');
        
        $user_id = ( $user ) ? $user->id : '0';

        $this->db->select('topics.*, users.name AS `author_name`, users.photo AS `author_photo`, users.link AS `author_link`, user_vote.user_id AS `user_voted`, COUNT(vote_count.user_id) AS `votes`');
        $this->db->join('users', 'topics.user_id = users.id');
        $this->db->join('votes AS vote_count', 'topics.id = vote_count.topic_id', 'left');
        $this->db->join('votes AS user_vote', 'topics.id = user_vote.topic_id AND user_vote.user_id = ' . $user_id, 'left');
        $this->db->group_by('topics.id');
        $this->db->order_by('votes', 'DESC');
        $this->db->order_by('topics.created', 'DESC');

        $query = $this->db->get_where('topics');

        foreach ( $query->result() as $topic ) {
            $topic->user_voted = ( !empty($topic->user_voted) );
            
            $topics[] = $topic;
        }
        
        return $topics;
    }

    public function get_topic( $topic_id )
    {
        $user = $this->session->userdata('user');
        
        $user_id = ( $user ) ? $user->id : '0';

        $this->db->select('topics.*, users.name AS `author_name`, users.photo AS `author_photo`, users.link AS `author_link`, COUNT(vote_count.user_id) AS `votes`, GROUP_CONCAT(tags.name) AS `tags`');
        $this->db->join('users', 'topics.user_id = users.id');
        $this->db->join('votes AS vote_count', 'topics.id = vote_count.topic_id', 'left');
        $this->db->join('topic_tags', 'topics.id = topic_tags.topic_id', 'left');
        $this->db->join('tags', 'topic_tags.tag_id = tags.id', 'left');

        $query = $this->db->get_where('topics', array( 'topics.id' => $topic_id ), 1);
        
        $topic = $query->row();
            
        $topic->tags = ( !empty($topic->tags) ) ? explode(',', $topic->tags) : array();
        
        $topic->user_voted = ( !empty($topic->user_voted) );

        return $topic;
    }

    public function create_topic( $new_topic )
    {
        $tags = $new_topic['tags'];
        
        unset($new_topic['tags']);
        
        $this->db->insert('topics', $new_topic);
        
        if ( !empty($tags) ) {
            $topic_id = $this->db->insert_id();
            $this->add_topic_tags($topic_id, $tags);
        }

        return $this->db->insert_id();
    }

    public function add_vote( $topic_id )
    {
        $user = $this->session->userdata('user');

        if ( $user ) {
            $this->db->insert('votes', array(
                'topic_id' => $topic_id,
                'user_id'  => $user->id
            ));
        }
    }

    public function remove_vote( $topic_id )
    {
        $user = $this->session->userdata('user');

        if ( $user ) {
            $this->db->delete('votes', array(
                'topic_id' => $topic_id,
                'user_id'  => $user->id
            ));
        }
    }

    /**
     * Returns list of predefined topic tags, in alpha order.
     * @return array
     */
    public function get_tags()
    {
        $tags = array();
        
        $this->db->order_by('name', 'ASC');
        
        $query = $this->db->get('tags');
        
        foreach ( $query->result() as $tag ) {
            $tags[] = $tag;
        }
        
        return $tags;
    }
    
    /**
     * Adds tags to a given topic
     * @param int $topic_id
     * @param array $tags
     */
    public function add_topic_tags( $topic_id, $tags )
    {
        if ( !empty($tags) ) {
            foreach ( $tags as $tag_id ) {
                $this->db->insert('topic_tags', array(
                    'topic_id' => $topic_id,
                    'tag_id'   => $tag_id
                ));
            }
        }
    }

}