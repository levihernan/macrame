<?php snippet('header') ?>

  <main class="main fullbackground cadenas" style="min-height:100vh; background:url('<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
    <?php echo $image->url() ?>
<?php endforeach ?>')" role="main">

    <div class="text identidad">
      <?php echo $page->text()->kirbytext() ?>


  <?php foreach($page->children() as $subpage): ?>
    
    <h3 class="aviso-legal">
        <a href="<?php echo $subpage->url() ?>">
      <?php echo html($subpage->title()) ?>
        </a>
    </h3>
      
    </div>
  </main>
  <?php endforeach ?>

<?php snippet('footer') ?>