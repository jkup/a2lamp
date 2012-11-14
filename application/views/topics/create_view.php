<? $this->load->view('global/header_view'); ?>
        
<div id="create-topic">
    <form action="/topic/create" method="post">
        <input type="hidden" name="user_id" value="">
        
        <fieldset>
            <p>
                <label for="topic_title">Title</label><br>
                <div class="error"><?= form_error('title') ?></div>
                <input type="text" name="title" id="topic_title" placeholder="enter a topic title" value="<?= set_value('title') ?>">
            </p>

            <p>
                <label for="topic_description">Description</label><br>
                <div class="error"><?= form_error('description') ?></div>
                <textarea name="description" id="topic_description" placeholder="enter a description for this topic"><?= set_value('description') ?></textarea>
            </p>
            
            <p><input type="submit" name="submit" value="create topic"></p>
        </fieldset>
    </form>
</div>

<? $this->load->view('global/footer_view'); ?>