<?
  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;
?>

<section class="section">
  <div class="columns g-fullheight <?= $alignment ?>">
    <article class="column content article-border <?= $layout ?>">

  <? if($form->hasMessage()): ?>

    <? if($form->successful()): ?>

    <div class="js-message--success is-successful u-center">
      <?= kirbytext($page->success()) ?>
    </div>

    <? else: ?>

    <div class="js-message--fail is-fail u-center">
      <?= kirbytext($page->fail()) ?>
    </div>

  <? endif ?>
  <? else: ?>

    <h2><?= $page->text() ?></h2>
    <? snippet('contact.form') ?>

  <? endif ?>

    <div class="u-alert js-message--success is-successful u-center" style="display: none;">
      <?= kirbytext($page->success()) ?>
    </div>

    <div class="u-alert js-message--fail is-fail u-center" style="display: none;">
      <?= kirbytext($page->fail()) ?>
    </div>

  <? snippet('contact.sidebar') ?>
