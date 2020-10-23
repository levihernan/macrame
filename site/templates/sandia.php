<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <h2><?php echo $page->author()->html() ?></h2>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>
