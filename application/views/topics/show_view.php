<? $this->load->view('global/header_view'); ?>

<div class="topic">
    <div class="row">
        <div class="large-12 columns">
            <h2><?= $topic->title ?></h2>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <ul class="inline-list topic-meta">
                <? if ( !empty($topic->author_photo) ) : ?>
                <li>
                    <div class="author-photo" style="background-image:url(<?= $topic->author_photo ?>)"></div>
                    <?= anchor($topic->author_link, $topic->author_name, array( 'class' => 'author-name' )) ?>
                </li>
                <? endif; ?>
                <li><?= date('M. j, Y', strtotime($topic->created)) ?></li>
                <li><?= $topic->votes ?> votes</li>
            </ul>
        </div>
    </div>

    <div class="row">
        <div class="large-12 columns">
            <p><?= $topic->description ?></p>
        </div>
    </div>

<? if ( !empty($topic->tags) ) : ?>
    <div class="row">
        <div class="tags large-12 columns">  
            <? foreach ( $topic->tags as $tag_name ) : ?>
                <span class="tag"><?= $tag_name ?></span>
            <? endforeach; ?>
        </div>
    </div>
<? endif; ?>
    
    <div class="row" id="comments">
        <div class="large-12 columns">
            <div id="disqus_thread"></div>
            <script type="text/javascript">
                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                var disqus_shortname = 'a2lamp'; // required: replace example with your forum shortname
                //var disqus_developer = 1;

                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function() {
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
        </div>
    </div>
</div>

<? $this->load->view('global/footer_view'); ?>