<html>
	<head>
		<title>Codeigniter Test Day</title>
	</head>
	<body>
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
	<br />
	<?php echo anchor("blog/create", "Create Post"); ?>
	</body>
</html>