<? $this->load->view('global/header_view'); ?>

<div class="row">        
    <? if ( $user ) : ?>
        <div class="six columns centered">
            <form action="/topic/create" method="post">
                <input type="hidden" name="user_id" value="<?= $user->id ?>">
                
                <label class="<?= ( form_error('title') ) ? "error" : '' ?>">Title</label>
                <input
                    type="text"
                    name="title"
                    placeholder="enter a topic title"
                    value="<?= set_value('title') ?>"
                    class="<?= ( form_error('title') ) ? "error" : '' ?>">
                <?= form_error('title', '<small class="error">', '</small>') ?>

                <label class="<?= ( form_error('description') ) ? "error" : '' ?>">Description</label>
                <textarea
                    name="description"
                    placeholder="enter a description for this topic"
                    class="<?= ( form_error('description') ) ? "error" : '' ?>"><?= set_value('description') ?></textarea>
                <?= form_error('description', '<small class="error">', '</small>') ?>

                <p>
                    <input type="submit" class="button" name="submit" value="create topic">
                    <?= anchor('/topics', 'cancel') ?>
                </p>
            </form>
        </div>
    <? else : ?>
        <div class="twelve columns centered">
            <h2>Access denied</h2>
            <h3 class="subheader">You must be logged in to create a topic.  <?= anchor('/login', 'Click here to login.') ?></h3>
        </div>
    <? endif; ?>
</div>

<? $this->load->view('global/footer_view'); ?>