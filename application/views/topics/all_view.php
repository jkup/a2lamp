<? $this->load->view('global/header_view'); ?>

<div class="row">
    <div class="twelve columns"> 
        <? if ( !empty($topics) ) : ?>
            <? foreach ( $topics as $topic ) : ?>
                <h3><?= anchor('topic/' . $topic->id, $topic->title) ?></h3>
                <h5 class="subheader"><?= $topic->description ?></h5>
                <hr>
            <? endforeach; ?>
        <? else : ?>
            <h2>No topics found</h2>
            <h3 class="subheader"><?= anchor('/topic/create', 'Click here') ?> to create a topic!</h3>
        <? endif; ?>
    </div>
</div>

<? $this->load->view('global/footer_view'); ?>