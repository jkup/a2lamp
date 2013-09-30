<? $this->load->view('global/header_view'); ?>

<div class="row">
    <div class="large-12 columns">
        <h2>Welcome to the official website of the Ann Arbor PHP Meetup Group.</h2>
        <h3 class="subheader">Check out out blog and topics list and stay tuned for more updates!</h3>
        <h4>Check out <a href="http://www.meetup.com/ann-arbor-php-mysql/">Our Meetup Site</a> for updates!</h4>
        <hr>
    </div>
</div>

<? if ( ! empty($upcoming) ) : ?>
    <div class="row">
        <div class="large-12 columns">
            <h3>Next Meetup: <?= date('l, F j @ g:i A', $upcoming->time / 1000) ?></h3>
        </div>
    </div>

    <div class="row">
        <div class="large-8 columns">
            <h4><?= $upcoming->name ?></h4>

            <h5 class="subheader"><?= $upcoming->description ?></h5>
        </div>

        <? if ( ! empty($upcoming->venue->name) ) : ?>
            <div class="large-4 columns">
                <div class="panel">
                    <strong><?= $upcoming->venue->name ?></strong>
                    (<a href="<?= sprintf('http://maps.google.com/maps?q=%s,%s', $upcoming->venue->lat, $upcoming->venue->lon) ?>">Map</a>)<br>
                    <br>
                    <address>
                        <?= $upcoming->venue->address_1 ?><br>
                        <?= $upcoming->venue->city ?>, <?= $upcoming->venue->state ?>
                    </address>
                </div>
            </div>
        <? endif; ?>
    </div>
<? endif; ?>

<? $this->load->view('global/footer_view'); ?>
