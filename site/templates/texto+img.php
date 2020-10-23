<?php snippet('header') ?>
<?php echo css('assets/css/vertical-scroll.css') ?>

  <main class="main" role="main">
      <div class="water-wrap">

      <?php if($image = $page->image()): ?>
<img draggable="false" class="side-image" src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
<?php endif ?>
      
    <div class="text watertext">
        <div class="waterfront">
      <h1><?php echo $page->title()->html() ?></h1>
      <h2>por <?php echo $page->author()->html() ?></h2>
      <h2><?php echo $page->credit()->kirbytext() ?></h2>
        <?php snippet('social-share') ?>
        </div>
        <div class="watercontent">
      <?php echo $page->text()->kirbytext() ?>
        </div>
    </div>
      </div>
    
      
  </main>



<?php snippet('footer') ?>