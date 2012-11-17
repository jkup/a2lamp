<? $this->load->view('global/header_view'); ?>
        
<div id="topics">
    <? if ( !empty($topics) ) : ?>
        <ul>
            <? foreach ( $topics as $topic ) : ?>
                <div class="row">
                    <div class="six columns centered"> 
                     <li>
                        <h2><?= $topic->title ?></h2>
                        <p><?= $topic->description ?></p>
                    </li>
                  </div>
                </div>
            <? endforeach; ?>
        </ul>
    <? endif; ?>
</div>

<? $this->load->view('global/footer_view'); ?>