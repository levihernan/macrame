<nav role="navigation">

  <ul class="menu cf">
    <?php foreach($pages->visible() as $p): ?>
    <li>
      <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>


    </li>
    <?php endforeach ?>
  </ul>

    <a  href="javascript:void(0)" class="burgerbutton" onclick="openBurger();">
        &nbsp;
        <img class="burger" src="<?php echo url('content/misc/3dot.png') ?>">
    </a>
    
    
</nav>
