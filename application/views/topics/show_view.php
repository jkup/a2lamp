<? $this->load->view('global/header_view'); ?>

<div class="topic">
    <div class="row">
        <div class="twelve columns">
            <h2><?= $topic->title ?></h2>
        </div>
    </div>

    <div class="row">
        <div class="twelve columns">
            <ul class="inline-list topic-meta">
                <li>
                    <!--<div class="author-photo" style="background-image:url(<?= $topic->author_photo ?>)"></div>-->
                    <?= anchor($topic->author_link, $topic->author_name, array( 'class' => 'author-name' )) ?>
                </li>
                <li><?= date('M. j, Y', strtotime($topic->created)) ?></li>
                <li><?= $topic->votes ?> votes</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="twelve columns">
            <p><?= $topic->description ?></p>
        </div>
    </div>
</div>

<? $this->load->view('global/footer_view'); ?>