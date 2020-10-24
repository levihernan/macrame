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
                <!-- <img src="< ?php echo $site->image()->url() ?>" class="logo-img"/> -->
          <h1><?php echo $page->title()->html() ?></h1>
          <!--h2>Por: < ?php echo $page->author()->html() ?></h2-->
          <?php echo $page->text()->kirbytext() ?>

            </div>
        </div>

        <?php if ($page->body()!=""): ?>
        <div class="post text justify">
          <?php echo $page->body()->kirbytext() ?>



        <?php if ($page->hasAudio()): ?>
            <?php foreach($page->audio() as $audio): ?>
            <audio controls>
              <source src="<?php echo $audio->url() ?>" type="audio/mpeg">
            </audio>
            <?php endforeach ?>
        <?php endif ?>

        </div>
        <?php endif ?>

          <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <?php if ($image->tile()->bool()<1): ?>
        <div class="post">
            <img draggable="false" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">

        </div>
        <?php endif ?>
        <?php endforeach ?>



        <?php if ($page->vimeonumber()!=""): ?>
            <div class="post">
            <iframe src="https://player.vimeo.com/video/<?php echo $page->vimeonumber()->text() ?>?title=0&byline=0&portrait=0" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <?php endif ?>

        <!--?php if ($page->text()!=""): ?>
        <div class="post text">
          < ?php echo $page->text()->kirbytext() ?>
        </div>
        < ?php endif ?-->

    </div>
  </main>

<?php snippet('footer') ?>
