<? $this->load->view('global/header_view'); ?>
<div class="row">
	<div class="twelve columns centered">
		<?php echo anchor("blog/create", "Create Post", 'class="button"'); ?>
	</div>
</div>
<div class="row">
	<div class="twelve columns centered"> 
		<?php
			foreach($posts as $post)
			{
				$date = new DateTime($post->timestamp);
				echo "<h1>".$post->title."</h1>";
				echo "<br />";
				echo $post->content;
				echo "<br />";
				echo $post->author;
				echo "<br />";
				echo $date->format('F d, Y');
			}
		?>
	</div>
</div>
	<br />
<? $this->load->view('global/footer_view'); ?>