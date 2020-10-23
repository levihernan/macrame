<iframe id="vimeoplayer" src="https://player.vimeo.com/video/168261098?api=1&player_id=vimeoplayer&autoplay=1&title=0&byline=0&portrait=0" width="100%" height="100%" frameborder="0"></iframe>
<script type="text/javascript">
$(function() {
    var iframe = $('#vimeoplayer')[0];
    var player = $f(iframe);
    var status = $('.status');

    // When the player is ready, add listeners for pause, finish, and playProgress
    player.addEvent('ready', function() {
        status.text('ready');
        
        player.addEvent('pause', onPause);
        player.addEvent('finish', onFinish);
        player.addEvent('playProgress', onPlayProgress);
    });

    // Call the API when a button is pressed
    $('button').bind('click', function() {
        player.api($(this).text().toLowerCase());
    });

    function onPause() {
        status.text('paused');
    }

    function onFinish() {
        status.text('finished');
    }

    function onPlayProgress(data) {
        status.text(data.seconds + 's played');
        if(data.seconds>62){
            iframe.style.opacity=0;
            iframe.style.height=0;
            
        }
    }
});    
    
</script>