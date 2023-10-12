<?php
  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;
?>

<section class="section">
  <div class="columns g-fullheight <?= $alignment ?>">
    <article class="column content article-border <?= $layout ?>">

  <?php if($form->hasMessage()): ?>

    <?php if($form->successful()): ?>

    <div class="js-message--success is-successful u-center">
      <?= $page->success()->kirbytext() ?>
    </div>

    <?php else: ?>

    <div class="js-message--fail is-fail u-center">
      <?= $page->fail()->kirbytext() ?>
    </div>

  <?php endif ?>
  <?php else: ?>

    <h2><?= $page->text() ?></h2>
    <?php snippet('contact.form') ?>

  <?php endif ?>

    <div class="u-alert js-message--success is-successful u-center" style="display: none;">
      <?= $page->success()->kirbytext() ?>
    </div>

    <div class="u-alert js-message--fail is-fail u-center" style="display: none;">
      <?= $page->fail()->kirbytext() ?>
    </div>

  <?php snippet('contact.sidebar') ?>
