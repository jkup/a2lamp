<? $this->load->view('global/header_view'); ?>

<? if ( !empty($btopics) ) : ?>
    <div class="row">        
        <div class="large-2 columns">
            <?= anchor('topics/create', 'Submit a topic', array( 'class' => 'small button' )) ?>
        </div>
    </div>
    <div class="row">
        <div class="large-6 columns">
            <h3 class="subheader">Beginner Topics</h3>
            <? foreach ( $btopics as $topic ) : ?>
                <div class="topic">
                    <? if ( isset($topic->user_voted) && $topic->user_voted === true ) : ?>
                        <a href="#" class="remove-vote" data-topicid="<?= $topic->id ?>">
                            <span class="icon up-arrow"></span>
                        </a>
                    <? elseif ( $user ) : ?>
                        <a href="#" class="add-vote" data-topicid="<?= $topic->id ?>">
                            <span class="icon up-arrow"></span>
                        </a>
                    <? else : ?>
                        <a href="#" class="log-in-popup" title="Log in to vote up topics">
                            <span class="icon up-arrow"></span>
                        </a>
                    <? endif; ?>
                    
        			<?if ($user) : ?>
        				<? if($user->id == '16778651' || $user->id == '15291061' || $user->id=='41799642') : ?>
        					<?= anchor('topics/add_to_archive?id='. $topic->id ,'Archive Topic',array( 'class' => 'small right' )) ?>
        				<? endif; ?>
        			<? endif; ?>
                   
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
                            <li><?= $topic->votes ?> votes</li>
                            <li><?= $topic->level ?> level topic</li>
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
            <? endforeach; ?>
        </div>
        <div class="large-6 columns">
            <h3 class="subheader">Advanced Topics</h3>
                <? foreach ( $atopics as $topic ) : ?>
                    <div class="topic">
                        <? if ( isset($topic->user_voted) && $topic->user_voted === true ) : ?>
                            <a href="#" class="remove-vote" data-topicid="<?= $topic->id ?>">
                                <span class="icon up-arrow"></span>
                            </a>
                        <? elseif ( $user ) : ?>
                            <a href="#" class="add-vote" data-topicid="<?= $topic->id ?>">
                                <span class="icon up-arrow"></span>
                            </a>
                        <? else : ?>
                            <a href="#" class="log-in-popup" title="Log in to vote up topics">
                                <span class="icon up-arrow"></span>
                            </a>
                        <? endif; ?>
                        
                        <?if ($user) : ?>
                            <? if($user->id == '16778651' || $user->id == '15291061' || $user->id=='41799642') : ?>
                                <?= anchor('topics/add_to_archive?id='. $topic->id ,'Archive Topic',array( 'class' => 'small right' )) ?>
                            <? endif; ?>
                        <? endif; ?>
                       
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
                                <li><?= $topic->votes ?> votes</li>
                                <li><?= $topic->level ?> level topic</li>
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
                <? endforeach; ?>
            </div>
        </div>
<? else : ?>
    <div class="row">
        <div class="large-12 columns">
            <h2>No topics found</h2>
            <h3 class="subheader"><?= anchor('/topic/create', 'Click here') ?> to create a topic!</h3>
        </div>
    </div>
<? endif; ?>

<? $this->load->view('global/footer_view'); ?>
