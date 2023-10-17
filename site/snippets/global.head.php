<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>


  <!-- Search engines -->
  <meta name="description" content="<?php
  if($page->description() != ''):
    echo $page->description();
  else:
    echo $site->description();
  endif ?>">
  <meta name="keywords" content="<?php
  if($page->tags() != ''):
    echo $page->tags();
  else:
    echo $site->keywords();
  endif ?>">

  <!-- Google Plus -->
  <!-- Update your html tag to include the itemscope and itemtype attributes. -->
  <!-- html itemscope itemtype="http://schema.org/{CONTENT_TYPE}" -->
  <meta itemprop="name" content="<?= $page->title() ?>">
  <meta itemprop="description" content="<?php
  if($page->description() != ''):
    echo $page->description();
  else:
    echo $site->description();
  endif ?>">
  <meta itemprop="image" content="<?php
  if($page->image('thumb@2x.png')):
    echo $page->url(); echo '/thumb@2x.png';
  elseif($page->image('thumb@2x.jpg')):
    echo $page->url(); echo '/thumb@2x.jpg';
  elseif($page->image('header.png')):
    echo $page->url(); echo '/header.png';
  elseif($page->image('header.jpg')):
    echo $page->url(); echo '/header.jpg';
  endif ?>">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@<?= $pages->find('contact')->twitter() ?>">
  <meta name="twitter:title" content="<?= $page->title() ?>">
  <meta name="twitter:description" content="<?php
  if($page->description() != ''):
    echo $page->description();
  else:
    echo $page->text()->chopper(150);
  endif ?>">
  <meta name="twitter:image:src" content="<?php
  if($page->image('social.png')):
    echo $page->url(); echo '/social.png';
  elseif($page->image('social.jpg')):
    echo $page->url(); echo '/social.jpg';
  elseif($page->image('header.png')):
    echo $page->url(); echo '/header.png';
  elseif($page->image('header.jpg')):
    echo $page->url(); echo '/header.jpg';
  endif ?>">
  <meta name="twitter:player" content="">

  <!-- Open Graph General (Facebook & Pinterest) -->
  <meta property="og:url" content="<?= $page->url() ?>">
  <meta property="og:title" content="<?= $page->title() ?>">
  <meta property="og:description" content="<?php
  if($page->description() != ''):
    echo $page->description();
  else:
    echo $page->text()->chopper(150);
  endif ?>">
  <meta property="og:site_name" content="<?= $site->title() ?>">
  <meta property="og:image" content="<?php
  if($page->image('social.png')):
    echo $page->url(); echo '/social.png';
  elseif($page->image('social.jpg')):
    echo $page->url(); echo '/social.jpg';
  elseif($page->image('header.png')):
    echo $page->url(); echo '/header.png';
  elseif($page->image('header.jpg')):
    echo $page->url(); echo '/header.jpg';
  endif ?>">
  <meta property="fb:admins" content="">
  <meta property="fb:app_id" content="">
  <meta property="og:locale" content="en_US">

  <link rel="icon"                                  href="<?= $site->url() ?>/favicon.ico">
  <link rel="apple-touch-icon"      sizes="57x57"   href="<?= $site->url() ?>/assets/img/icons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon"      sizes="114x114" href="<?= $site->url() ?>/assets/img/icons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon"      sizes="72x72"   href="<?= $site->url() ?>/assets/img/icons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon"      sizes="144x144" href="<?= $site->url() ?>/assets/img/icons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon"      sizes="60x60"   href="<?= $site->url() ?>/assets/img/icons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon"      sizes="120x120" href="<?= $site->url() ?>/assets/img/icons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon"      sizes="76x76"   href="<?= $site->url() ?>/assets/img/icons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon"      sizes="152x152" href="<?= $site->url() ?>/assets/img/icons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon"      sizes="180x180" href="<?= $site->url() ?>/assets/img/icons/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?= $site->url() ?>/assets/img/icons/favicon-192x192.png">
  <link rel="icon" type="image/png" sizes="160x160" href="<?= $site->url() ?>/assets/img/icons/favicon-160x160.png">
  <link rel="icon" type="image/png" sizes="96x96"   href="<?= $site->url() ?>/assets/img/icons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16"   href="<?= $site->url() ?>/assets/img/icons/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32"   href="<?= $site->url() ?>/assets/img/icons/favicon-32x32.png">
  <meta name="msapplication-TileColor"           content="#fff">
  <meta name="msapplication-TileImage"           content="<?= $site->url() ?>/assets/img/icons/mstile-144x144.png">

  <?= css('assets/build/css/main.min.css') ?>

</head>

<body class="<?= str_replace('.', '--', $page->template()); if(isset($bodyclass) && $bodyclass != $page->slug()): echo ' ' . $bodyclass; endif ?>">
