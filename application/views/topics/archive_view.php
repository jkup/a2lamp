<? $this->load->view('global/header_view'); ?>

<? if ( !empty($topics) ) : ?>
    <div class="row">
        <div class="large-10 columns">
            <h2>Archived Topics</h2>
        </div>
        
        <div class="large-2 columns">
            <?= anchor('topics/create', 'Submit a topic', array( 'class' => 'small button' )) ?>
        </div>
    </div>

    <? foreach ( $topics as $topic ) : ?>
        <div class="row">
            <div class="large-12 columns">
                <div class="topic">
                    <div class="topic-info">
                        <h3><?= anchor('topic/' . $topic->id, $topic->title) ?></h3>                    
                    
                        <ul class="inline-list topic-meta">
                            <? if ( !empty($topic->author_photo) ) : ?>
                            <li>
                                <div class="author-photo" style="background-image:url(<?= $topic->author_photo ?>)"></div>
                                <?= anchor($topic->author_link, $topic->author_name, array( 'class' => 'author-name' )) ?>
                            </li>
                            <? endif; ?>
                            <li><?= date('M. j, Y', strtotime($topic->created)) ?></li>
                        </ul>
                        
                        <p class="description">
                            <? if ( strlen($topic->description) > 200 ) : ?>
                                <span class="short-description">
                                    <?= character_limiter($topic->description, 200, '&hellip;<a href="#" class="read-more-toggle">read more</a> <i class="icon-caret-down"></i>') ?>
                                </span>
                                <span class="full-description hidden">
                                    <?= nl2br($topic->description) ?> 
                                    <a href="#" class="read-more-toggle">collapse</a> <i class="icon-caret-up"></i>
                                </span>
                            <? else : ?>
                                <?= nl2br($topic->description) ?>
                            <? endif; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <? endforeach; ?>
<? else : ?>
    <div class="row">
        <div class="large-12 columns">
            <h2>No topics found</h2>
        </div>
    </div>
<? endif; ?>

<? $this->load->view('global/footer_view'); ?>