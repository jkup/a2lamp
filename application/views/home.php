<? $this->load->view('global/header_view'); ?>

<div class="row">
    <div class="six columns centered">   
    <?php
    echo anchor('topics/', 'Presentation Topics', 'class="button"');
    echo anchor('blog/', 'Minutes From Past Meetups', 'class="button"');
    ?>
    </div>
</div>

<div class="row">
    <div class="six columns centered">  
        <h2>Welcome to the official website of the Ann Arbor PHP Meetup Group.</h2>
        <h2 class="subheader">Check out out blog and topics list and stay tuned for more updates!</h2>
    </div>
</div>

<? $this->load->view('global/footer_view'); ?>