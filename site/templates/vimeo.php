<?php snippet('header') ?>  
<?php echo css('assets/css/horizontal-scroll.css') ?>
<?php echo js('assets/js/jquery.mousewheel.js') ?>
<script>
	$(function(){
		$("#page-wrap").wrapInner("<table cellspacing='30'><tr>");
		$(".post").wrap("<td></td>");
		$("#page-wrap").mousewheel(function(event, delta) {
			this.scrollLeft -= (delta * 30);
            if ($(window).width() < 1080) {
            }
            else {
               //event.preventDefault();
            }
            //	event.preventDefault();
		});   
	});
</script> 



  <main class="main" role="main">
    <div id="page-wrap" class="imagenes">
        <div class="post text">
            <div class="waterfront">
          <h1><?php echo $page->title()->html() ?></h1>
          <?php echo $page->creditos()->kirbytext() ?>
            
          <?php snippet('social-share') ?>           
            </div>
        </div>

        
        
        <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>   
        <?php if ($image->tile()->bool()<1): ?>
        <div class="post">
            <img class="lazy" draggable="false" data-original="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
            <noscript>
            <img draggable="false" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
            </noscript>
        </div>
        <?php endif ?>
        <?php endforeach ?>
        
        <div class="post">
            <iframe src="https://player.vimeo.com/video/<?php echo $page->vimeonumber()->text() ?>?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        
        <?php if ($page->text()!=""): ?>
        <div class="post text justify">
          <?php echo $page->text()->kirbytext() ?>
        </div>
        <?php endif ?>
        
        
    </div>
  </main>

<?php snippet('footer') ?>  