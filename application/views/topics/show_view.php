<? $this->load->view('global/header_view'); ?>
<div class="row">
	<div class="six columns centered">       
		<div class="topic">
		    <h2><?= $topic->title ?></h2>
		    <p><?= $topic->description ?></p>
		</div>
	</div>
</div>

<? $this->load->view('global/footer_view'); ?>