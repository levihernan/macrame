<div class="social-share">
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $page->url() ?>"
   target="_blank" title="Share on Facebook">
        <img id="social-button" src="<?php echo page('misc')->file('facebook.png')->url() ?>">
    </a>    
    <a href="https://twitter.com/share?url=<?php echo $page->url() ?>&via=revista_sandia&text=<?php echo $page->title() ?>"
   target="_blank" title="Share on Twitter">
        <img id="social-button" src="<?php echo page('misc')->file('twitter.png')->url() ?>">
    </a>
    <a class="whatsapp" href="whatsapp://send?text=<?php echo $page->title() ?>: <?php echo $page->url() ?>" data-action="share/whatsapp/share">
        <img id="social-button" src="<?php echo page('misc')->file('whatsapp.png')->url() ?>">
    </a>
    <a href="http://tumblr.com/share?s=&v=3&t=<?php echo $page->title() ?>&u=<?php echo $page->url() ?>" target="_blank" title="Share on Tumblr">
        <img id="social-button" src="<?php echo page('misc')->file('tumblr.png')->url() ?>">
    </a>
</div>