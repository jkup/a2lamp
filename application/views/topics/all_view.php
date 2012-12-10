<? $this->load->view('global/header_view'); ?>

<? if ( !empty($topics) ) : ?>
    <? foreach ( $topics as $topic ) : ?>
        <div class="row">
            <div class="ten columns">
                <h3><?= anchor('topic/' . $topic->id, $topic->title) ?></h3>
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
                <h5 class="subheader"><?= $topic->description ?></h5>
                <hr>
            </div>
        <div class="row">
    <? endforeach; ?>
<? else : ?>
    <div class="row">
        <div class="twelve columns">
            <h2>No topics found</h2>
            <h3 class="subheader"><?= anchor('/topic/create', 'Click here') ?> to create a topic!</h3>
        </div>
    </div>
<? endif; ?>

<? $this->load->view('global/footer_view'); ?>