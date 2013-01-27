<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_topic_tags extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'topic_id' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE
            ),
            'tag_id' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE
            )
        ));
        
        $this->dbforge->add_key('topic_id');
        $this->dbforge->add_key('tag_id');

        $this->dbforge->create_table('topic_tags');
    }

    public function down()
    {
        $this->dbforge->drop_table('topic_tags');
    }

}