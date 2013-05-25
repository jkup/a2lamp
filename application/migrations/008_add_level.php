<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_level extends CI_Migration {

    public function up()
    {
        $fields = array(
        	'level' => array(
                'type' => 'VARCHAR',
                'constraint'     => '255',
            )
		);

	   $this->dbforge->add_column('topics', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('topics', 'level');
    }

}