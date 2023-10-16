<?php
  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;

  if ($page->template() == 'event'):
  $category = 'event';

  elseif ($page->template() == 'release'):
  $category = 'release';

  else:
  $category = 'article';

  endif;

?>

<section class="section">
  <div class="columns g-fullheight <?= $alignment ?>">
    <article class="column content article-border <?= $layout ?>">

      <section class="scale--lg">

        <?php if ($page->hero() != ''): ?>
          <figure class="content__hero">
            <?php $img = $page->image($page->hero()) ?>
            <img src="<?= $img->thumb(array('width' => 760))->url() ?>" alt="" />
            <?php if ($page->hero_caption() != ''): ?>
              <figcaption><?= $page->hero_caption(); ?></figcaption>
            <?php endif; ?>
          </figure>
        <?php endif ?>

        <?php e($page->text() != '', $page->text()->kirbytext()) ?>

        <?php if ($page->affiliates() != ''): ?>
          <ul class="scale--normal affiliate-list u-unbullet">
            <?php foreach($page->affiliates()->toStructure() as $affiliate) {
              snippet("affiliate", ["affiliate" => $affiliate]);
            } ?>
          </ul>
        <?php endif ?>

        <?php if ($page->byline() != ''): ?>
          <div class="scale--normal byline">
            <?php if ($page->author_img() != ''): ?>
              <?php $img = $page->image($page->author_img()) ?>
              <div class="author">
                <img class="author__img" src="<?= $img->thumb(array('width' => 140, 'height' => 140, 'crop' => true))->url() ?>" alt="<?= $page->author() ?>">
              </div>
            <?php endif ?>
            <div class="byline__text">
              <h3><?php if ($page->category() == 'Ask an Archivist'): ?>About the interviewer:<?php else: ?>About the author:<?php endif ?></h3>
              <?= $page->byline()->kt() ?>
            </div>
          </div>
        <?php endif ?>

        <?php if ($page->references() != ''): ?>
          <h3>References:</h3>
          <div class="scale--normal">
            <?= $page->references()->kt() ?>
          </div>
        <?php endif; ?>

        <?php if ($page->footnote() != ''): ?>
          <div class="scale--normal">
            <?= $page->footnote()->kt() ?>
          </div>
        <?php endif; ?>

      </section>
