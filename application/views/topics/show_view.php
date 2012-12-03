<? $this->load->view('global/header_view'); ?>
<div class="row">
    <div class="twelve columns centered">       
        <div class="topic">
            <h2><?= $topic->title ?></h2>
            <h3 class="subheader"><?= $topic->description ?></h3>
        </div>
    </div>
</div>

<? $this->load->view('global/footer_view'); ?>