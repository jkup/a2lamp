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
    
    // show/hide topic description toggle
    $('.read-more-toggle').click(function(e) {
        e.preventDefault();
        
        var $description = $(this).closest('.description');
        
        $('.short-description, .full-description', $description).toggle();
    });
    
    // log-in prompt popup
    $('.log-in-popup').click(function(e) { 
        e.preventDefault();
    }).qtip({
        show: {
            event: 'click'
        },
        position: {
            my: 'top left',
            at: 'bottom center'
        },
	style: {
            classes: 'qtip-youtube'
        }
    });
    
});