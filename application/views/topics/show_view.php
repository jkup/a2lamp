<? $this->load->view('global/header_view'); ?>

<div class="row">
    <div class="twelve columns">
        <h2><?= $topic->title ?></h2>
    </div>
</div>

<div class="row">
    <div class="twelve columns">
        <h3 class="subheader"><?= $topic->description ?></h3>
    </div>
</div>

<? $this->load->view('global/footer_view'); ?>