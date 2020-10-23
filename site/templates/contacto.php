<?php snippet('header') ?>  
<?php echo css('assets/css/horizontal-scroll.css') ?>
<?php echo js('assets/js/jquery.mousewheel.js') ?>
<script>
$(function(){
    $("#page-wrap").mousewheel(function(event, delta) {
        this.scrollLeft -= (delta * 30);
        //event.preventDefault();
    });   
});
</script>

  <main class="main" role="main">
    <div id="page-wrap" class="hola">
        <div class="post text contribuir">
          <?php echo $page->subtext()->kirbytext() ?>
        </div>
        <div class="post contacto">
            <div class="text">
          <?php echo $page->text()->kirbytext() ?>
        </div></div>

  </main>
<?php snippet('footer') ?>