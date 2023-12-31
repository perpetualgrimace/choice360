<?php
  // check for optional variables passed from template
  if(isset($layout)): $layout = $layout; else: $layout = null; endif;

  // blog posts
  $articles = $pages->find('blog')->children()->published()->filterBy('template', 'article');
  $items    = $articles->sortBy('date')->flip()->limit(2);

?>

<section class="section content section--no_bottom_padding">
  <div class="columns u-left--center">

    <div class="column <?= $layout ?>">

      <h2><a class="u-linked_heading" href="<?= $pages->find('blog')->url() ?>"><?= $pages->find('blog')->headline() ?></a></h2>

      <div class="columns cards u-left">
        <?php foreach ($items as $item): ?>
          <?php snippet('card', array('item' => $item)) ?>
        <?php endforeach; ?>
      </div>

    </div>

    <div class="column newsletter_signup">
      <?= $pages->find('blog')->cta()->kirbytext() ?>
    </div>

  </div>
</section>
