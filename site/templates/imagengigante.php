<?php snippet('header') ?>  
<?php echo css('assets/css/horizontal-scroll.css') ?>



  <main class="main" role="main">
    <div id="page-wrap" class="imagengigante" style="background: url('<?php echo $page->image('back.jpg')->url() ?>')">
                <?php foreach($page->images() as $image): ?>
                <?php if ($image->tile()->bool()<1): ?>
                <div class="giant">
                    <img src="<?php echo $image->url() ?>" alt="">
                </div>
                <?php endif ?>
                <?php endforeach ?>
    <?php snippet('social-share') ?>
        
        
    </div>
  </main>

<?php snippet('footer') ?> 