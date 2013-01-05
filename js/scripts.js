$(function() {
    
    // AJAX vote button action/update
    $('.topic .add-vote, .topic .remove-vote').click(function(e) {
        e.preventDefault();

        var $this   = $(this);
        var topicId = $this.data('topicid');
        var url     = '/topic/' + topicId;

        if ( $this.hasClass('add-vote') ) {
            url += '/add-vote';
            $this.removeClass('add-vote').addClass('remove-vote');
        } else {
            $this.removeClass('remove-vote').addClass('add-vote');
            url += '/remove-vote';
        }

        $.post(url);
    });
    
});