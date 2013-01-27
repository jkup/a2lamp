<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_tags extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type'           => 'VARCHAR',
                'constraint'     => 25
            )
        ));
        
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('name');

        $this->dbforge->create_table('tags');
    }

    public function down()
    {
        $this->dbforge->drop_table('tags');
    }

}