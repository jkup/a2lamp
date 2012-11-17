<? $this->load->view('global/header_view'); ?>
<div class="row">
	<div class="six columns centered">   
<?php
	echo anchor('topics/show_all', 'Presentation Topics', 'class="button"');
	echo anchor('blog/index', 'Minutes From Past Meetups', 'class="button"');
?>
	</div>
</div>
<? $this->load->view('global/footer_view'); ?>