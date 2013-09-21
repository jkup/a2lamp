<? $this->load->view('global/header_view'); ?>

<? if ( ! empty($user->id) ) : ?>
    <div class="row">
       <div class="ten columns">
           <h2>Submit a Job</h2>
       </div>
    </div>

    <form action="/jobs/create" method="post">
        <div class="row">
            <div class="twelve columns">
                <label>Job Title</label>
                <input type="text" name="title" placeholder="job title" value="" required>
            </div>
        </div>

        <div class="row">
            <div class="twelve columns">
                <label>Location</label>
                <input type="text" name="location" placeholder="job location" value="" required>
            </div>
        </div>

        <div class="row">
            <div class="twelve columns">
                <label>Company Name</label>
                <input type="text" name="company" placeholder="company name" value="" required>
            </div>
        </div>

        <div class="row">
            <div class="twelve columns">
                <label>URL</label>
                <input type="url" name="location" placeholder="link to job posting" value="" required>
            </div>
        </div>

        <div class="row">
            <div class="twelve columns">
                <label>Description</label>
                <textarea name="description" placeholder="job description" rows="6"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="twelve columns">
                <input type="submit" class="button" name="submit" value="create job">
                <?= anchor('/jobs', 'cancel') ?>
            </div>
        </div>
    </form>

<? else : ?>

    <div class="row">
        <div class="twelve columns">
            <h2>Access denied</h2>
            <h3 class="subheader">You must be logged in to create a topic.  <?= anchor('/login', 'Click here to login.') ?></h3>
        </div>
    </div>

<? endif; ?>

<? $this->load->view('global/footer_view'); ?>