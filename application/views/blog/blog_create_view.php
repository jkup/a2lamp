<? $this->load->view('global/header_view'); ?>
<div class="row">
	<div class="twelve columns centered">
		<?php echo anchor("blog/create", "Create Post", 'class="button"'); ?>
	</div>
</div>
<div class="row">
	<div class="twelve columns centered"> 
		<?php
			$this->load->helper('form');
			echo form_open('blog/insert');
			echo "Blog Title: ";
			echo form_input('title');
			echo "Blog Content: ";
			echo form_textarea('content');
			echo form_submit('submit', 'Submit');
			echo form_close();
		?>
	</div>
</div>
	<br />
<? $this->load->view('global/footer_view'); ?>