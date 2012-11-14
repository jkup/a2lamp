<? $this->load->view('global/header_view'); ?>
        
<?php
	echo anchor('topics/show_all', 'Presentation Topics', 'class="btn btn-primary"');
	echo anchor('blog/index', 'Minutes From Past Meetups', 'class="btn btn-primary"');
?>

<? $this->load->view('global/footer_view'); ?>