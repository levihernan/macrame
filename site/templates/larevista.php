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
               event.preventDefault();
            }
            //	event.preventDefault();
		});   
	});
</script>



  <main class="main" role="main">
    <div id="page-wrap" class="imagenes">
        <div class="post text crew">
          <h1><?php echo $page->title()->html() ?></h1>
            <?php echo $page->text()->kirbytext() ?>
        </div>
      <?php foreach($page->children()->sortBy('title', 'desc') as $revista): ?>
        <?php foreach($revista->documents()->filterBy('extension', 'pdf') as $pdf): ?>
            <div class="post">
                <a target="_blank" href="<?php echo $pdf->url() ?>">
                    <img draggable="false" src="<?php echo $revista->image()->url() ?>" title="<?php echo $revista->text()->html() ?>" >
                </a>
            </div>
        <?php endforeach ?>
      <?php endforeach ?>
        <div class="post text crew">
            <?php echo $page->subtext()->kirbytext() ?>
        </div>
        
        
        
        
        
    </div>
      

  </main>

<?php snippet('footer') ?> 
