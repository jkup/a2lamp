<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_completed extends CI_Migration {

    public function up()
    {
        $fields = array(
        	'completed' => array('type' => 'INT DEFAULT 0')
		);

	$this->dbforge->add_column('topics', $fields);
    }

    public function down()
    {
        $this->dbforge->drop_column('topics', 'completed');
    }

}