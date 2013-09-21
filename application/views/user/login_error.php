<? $this->load->view('global/header_view'); ?>

<div class="row">
    <div class="large-12 columns centered">
        <h2>Login error</h2>
        <h3 class="subheader">An error occurred while trying to log you in. <?= anchor('/login', 'Click here to try again.') ?></h3>
    </div>
</div>

<? $this->load->view('global/footer_view'); ?>