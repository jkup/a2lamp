$(function() {
    
    // AJAX vote button action/update
    $('.button.vote').click(function(e) {
        e.preventDefault();

        var $this   = $(this);
        var topicId = $this.data('topicid');
        var url     = '/topic/' + topicId;

        $this.toggleClass('success');

        if ( $this.hasClass('success') ) {
            $this.text('voted!');
            url += '/add-vote';
        } else {
            $this.text('vote for topic');
            url += '/remove-vote';
        }

        $.post(url);
    });
    
});