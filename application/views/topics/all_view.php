<? $this->load->view('global/header_view'); ?>

<div class="row">
    <div class="six columns centered">
        <?= anchor('topics/create', 'Create a new topic', 'class="button"'); ?>
    </div>
</div>


<? if ( !empty($topics) ) : ?>
<div class="row">
    <div class="six columns centered"> 
        <? foreach ( $topics as $topic ) : ?>
            <div class="panel topic">
                <h3><?= $topic->title ?></h3>
                <h5 class="subheader"><?= $topic->description ?></h5>
            </div>
        <? endforeach; ?>
    </div>
</div>
<? endif; ?>

<? $this->load->view('global/footer_view'); ?>