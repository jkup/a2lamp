<? $this->load->view('global/header_view'); ?>

<? if ( !empty($user->id) ) : ?>
        <div class="row">
           <div class="large-10 columns">
               <h2>Submit a Topic</h2>
           </div>
        </div>

        <form action="/topic/create" method="post" class="create-topic">
            <input type="hidden" name="user_id" value="<?= $user->id ?>">

            <div class="row">
                <div class="large-8 columns">
                    <label class="<?= ( form_error('title') ) ? "error" : '' ?>">Title</label>
                    <input
                        type="text"
                        name="title"
                        placeholder="enter a topic title"
                        value="<?= set_value('title') ?>"
                        class="<?= ( form_error('title') ) ? "error" : '' ?>">
                    <?= form_error('title', '<small class="error">', '</small>') ?>
                </div>
				<div class="large-4 columns" style="margin-top: 30px;">
					Beginner
					<input
						type="radio"
						name="level"
						value="beginner"
						checked="checked">
					Advanced
					<input
						type="radio"
						name="level"
						value="advanced">
				</div>
            </div>

            <div class="row">
                <div class="large-10 columns">
                    <label class="<?= ( form_error('description') ) ? "error" : '' ?>">Description</label>
                    <textarea
                        name="description"
                        placeholder="enter a description for this topic"
                        rows="6"
                        class="<?= ( form_error('description') ) ? "error" : '' ?>"><?= set_value('description') ?></textarea>
                    <?= form_error('description', '<small class="error">', '</small>') ?>
                </div>
            </div>

        <? if ( !empty($tags) ) : ?>
            <div class="row">
                <div class="tags large-10 columns">
                    <label>Tags</label>

                <? foreach ( $tags as $tag ) : ?>
                    <input type="checkbox" class="hidden" name="tags[]" id="tag-<?= $tag->id ?>" value="<?= $tag->id ?>">
                    <label class="tag" for="tag-<?= $tag->id ?>"><?= $tag->name ?></label>
                <? endforeach; ?>
                    
                </div>
            </div>
        <? endif; ?>

            <div class="row">
                <div class="submit large-10 columns">
                    <input type="submit" class="button" name="submit" value="create topic">
                    <?= anchor('/topics', 'cancel') ?>
                </div>
            </div>
        </form>
    </div>

<? else : ?>

    <div class="row">
        <div class="large-12 columns">
            <h2>Access denied</h2>
            <h3 class="subheader">You must be logged in to create a topic.  <?= anchor('/login', 'Click here to login.') ?></h3>
        </div>
    </div>

<? endif; ?>

<? $this->load->view('global/footer_view'); ?>
