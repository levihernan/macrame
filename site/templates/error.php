<?php snippet('header') ?>  
<?php echo css('assets/css/horizontal-scroll.css') ?>
<?php echo js('assets/js/jquery.mousewheel.js') ?>
<script>
	$(function(){
		$("#page-wrap").wrapInner("<table cellspacing='30'><tr>");
		$(".post").wrap("<td></td>");
		$("body").mousewheel(function(event, delta) {
			this.scrollLeft -= (delta * 30);
			event.preventDefault();
		});   
	});
</script>



  <main class="main" role="main">
    <div id="page-wrap">
        <div class="post text contacto">
          <?php echo $page->text()->kirbytext() ?>
        </div>

  </main>
