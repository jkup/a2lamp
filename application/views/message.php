<? $this->load->view('global/header_view'); ?>
        
<?php
	echo anchor('topics/index', 'Presentation Topics');
	echo anchor('blog/index', 'Minutes From Past Meetups');
?>

<? $this->load->view('global/footer_view'); ?>