<?php
  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8 scale--lg'; endif;
?>

<section class="section">
  <div class="columns <?= $alignment ?>">
    <article class="column article-border content <?= $layout ?>">

      <?= $page->text()->kirbytext() ?>

      <div class="columns scale--normal g-vcenter">

        <div class="column g-7">
            <? snippet('perspective', [
              'src' => $page->image($page->product_img()),
              'shadow' => TRUE
            ]) ?>
        </div>

        <div class="column g-5">
          <?= $page->caption()->kirbytext() ?>
        </div>

      </div>

      <div class="columns scale--normal">
        <div class="column">
        <?= $page->benefits()->kirbytext() ?>
        </div>
      </div>
