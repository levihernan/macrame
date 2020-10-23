<?php snippet('header') ?>
<?php echo css('assets/css/slick.css') ?>
<?php echo css('assets/css/watermelon.css') ?>
<?php echo js('assets/js/froogaloop.js') ?>
<?php echo js('assets/js/showGrouper.js') ?>

<?php snippet('firstvisit') ?>


<main class="main ip-main" role="main" style="padding-top:0">
      
<div id="slides">

        <div class="slides-container">

            <?php foreach(page('home')->images()->shuffle() as $slides): ?>
          <div class="slide" id="main-slider" style="background: url('<?php echo $slides->url() ?>')">
              <div class="center">
                  <a  class="slides-title" href="<?php echo $slides->link() ?>">
                            <h1 class="titulo"><?php echo $slides->title() ?></h1>
                            <p class="creditos">por <?php echo $slides->author() ?></p>
                  </a>
              </div>
            </div>
            <?php endforeach ?>
        </div>

</div>
      
      <!--div class="viewhole" style="background: url('content/misc/view-hole.png'); height:200px;">&nbsp;
      </div-->
    
<div class="section">   
<!--DESTACADOS-->
    <div class="destacados" style="background:#70ff00">

        <?php foreach(page('featured')->images()->sortBy('num', 'desc') as $featured): ?>


        <a  class="hulk" href="<?php echo $featured->link() ?>">
            <img draggable="false" src="<?php echo $featured->url() ?>"/>
            <div>
            <h1><?php echo $featured->title() ?></h1>
            <h2>por <?php echo $featured->author() ?></h2>
            </div>
        </a>

        <?php endforeach ?>

    </div>
</div>
      
<div class="viewhole" style="background: url('content/misc/background.jpg'); height:400px;">&nbsp;
</div>

<div id="notas" class="notas">
          <h1 id="waterheader">NOTAS</h1>
            <div class="grouper" id="notas0">
          <?php foreach(page('home')->children()->sortBy('num', 'desc')->visible() as $content): ?>
            <?php $counter++ ?>
            <div class="nota">
                <div class="card">
                    <a  href="<?php echo $content->url() ?>">
                        <img draggable="false" class="tile preserve" src="<?php echo $content->file('tile.jpg')->url() ?>">
                        <div class="group">
                        <h1><?php echo $content->title()->html() ?></h1>
                        <h2>por <?php echo $content->author()->html() ?></h2>
                        </div>
                    </a>
                </div>
            </div>
            <?php 
                if ($counter==12) {
                    $counter=0;
                    $notas++;
                    echo "</div><div class='grouper' id='notas";
                    echo $notas;
                    echo "'>";
                    }
            ?>  
          <?php endforeach ?>
                </div>
                    <button onclick="showGrouper()" id="masnotas">
                        <img draggable="false" class="tile preserve lazy" data-original="<?php echo page('misc')->file('masnotas.png')->url() ?>">
                        </div>
                    </button>
            
    </div>

</div>
              
<div class="footermelon">
  <div class="social">
  <?php foreach(page('redes-sociales')->images() as $rs): ?>
  <a target="_blank" href="<?php echo $rs->link() ?>"><img src="<?php echo $rs->url() ?>" /></a>
  <?php endforeach ?>
  <p id="credito"><&#33;-- por Hernan Levi --></&#33;--></p>
  </div>
</div>
              
      
</main>

<?php echo js('assets/js/jquery.easing.1.3.js') ?>
<?php echo js('assets/js/jquery.animate-enhanced.min.js') ?>

<?php echo js('assets/js/slick.js') ?>
<script type="text/javascript">
    $(document).ready(function(){
      $('.slides-container').slick({
          appendArrows: $('.slides-container'),
          fade: true,
          prevArrow: '<button type="button" class="slick-prev"><img class="arrow" src="content/misc/left.png"></button>',
          nextArrow: '<button type="button" class="slick-next"><img class="arrow" src="content/misc/right.png"></button>'
      });
    });
    
    
</script>

<?php echo js('assets/js/konami.js') ?>
<?php snippet('konami') ?>

<?php snippet('footer') ?>