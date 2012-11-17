<? $this->load->view('global/header_view'); ?>
<div class="row">
	<div class="six columns centered"> 
		<?php
			foreach($posts as $post)
			{
				echo "<h1>".$post->title."</h1>";
				echo "<br />";
				echo $post->content;
				echo "<br />";
				echo $post->author;
				echo "<br />";
				echo $post->timestamp;
			}
		?>
	</div>
</div>
	<br />
	<?php echo anchor("blog/create", "Create Post"); ?>
<? $this->load->view('global/footer_view'); ?>