<? $this->load->view('global/header_view'); ?>

<div class="row">
    <div class="ten columns">
        <h2><?= $topic->title ?></h2>
    </div>

    <div class="two columns">
        <? if ( isset($topic->user_voted) && $topic->user_voted === true ) : ?>
            <a href="#" class="button small radius right vote success" data-topicid="<?= $topic->id ?>">voted!</a>
        <? elseif ( $user ) : ?>
            <a href="#" class="button small radius right vote" data-topicid="<?= $topic->id ?>">vote for topic</a>
        <? else : ?>
            <?= anchor('login', 'log-in to vote', array( 'class' => 'button small radius right secondary' ) ) ?>
        <? endif; ?>
    </div>
</div>

<div class="row">
    <div class="twelve columns">
        <h3 class="subheader"><?= $topic->description ?></h3>
    </div>
</div>

<? $this->load->view('global/footer_view'); ?>