<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <meta name="author" content="<?php echo $page->author()->html() ?>">
    
    
    <meta property="og:title" content="<?php echo $page->title()->html() ?>"/>
    <meta property="og:author" content="<?php echo $page->author()->html() ?>"/>
    <meta property="og:url" content="<?php echo $page->url() ?>"/>
    <?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
        <meta property="og:image" content="<?php echo $image->url() ?>"/>
    <?php endforeach ?>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content="<?php echo $page->description()->html() ?>" />
    
        <link rel="shortcut icon" href="content/misc/favicon.png">
        <link rel="shortcut icon" href="../content/misc/favicon.png">

  <?php echo js('assets/js/jquery-1.12.1.min.js') ?>
  <?php echo css('assets/css/main.css') ?>
  <?php echo js('assets/js/jquery.lazyload.js') ?>
  <?php echo js('assets/js/burgerbutton.js') ?>
    
    <?php snippet('analytics') ?>
    <?php snippet('fbpixel') ?>
    
</head>
<body id="body">