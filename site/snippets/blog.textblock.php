<?
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

        <? if ($page->hero() != ''): ?>
          <figure class="content__hero">
            <? $img = $page->image($page->hero()) ?>
            <img src="<?= thumb($img, array('width' => 760))->url() ?>" alt="" />
            <? if ($page->hero_caption() != ''): ?>
              <figcaption><?= $page->hero_caption(); ?></figcaption>
            <? endif; ?>
          </figure>
        <? endif ?>

        <? e($page->text() != '', $page->text()->kirbytext()) ?>

        <? if ($page->affiliates() != ''): ?>
          <ul class="scale--normal affiliate-list u-unbullet">
            <? foreach($page->affiliates()->toStructure() as $affiliate) {
              snippet("affiliate", ["affiliate" => $affiliate]);
            } ?>
          </ul>
        <? endif ?>

        <? if ($page->byline() != ''): ?>
          <div class="scale--normal byline">
            <? if ($page->author_img() != ''): ?>
              <? $img = $page->image($page->author_img()) ?>
              <div class="author">
                <img class="author__img" src="<?= thumb($img, array('width' => 140, 'height' => 140, 'crop' => true))->url() ?>" alt="<?= $page->author() ?>">
              </div>
            <? endif ?>
            <div class="byline__text">
              <h3><? if ($page->category() == 'Ask an Archivist'): ?>About the interviewer:<? else: ?>About the author:<? endif ?></h3>
              <?= $page->byline()->kt() ?>
            </div>
          </div>
        <? endif ?>

        <? if ($page->references() != ''): ?>
          <h3>References:</h3>
          <div class="scale--normal">
            <?= $page->references()->kt() ?>
          </div>
        <? endif; ?>

        <? if ($page->footnote() != ''): ?>
          <div class="scale--normal">
            <?= $page->footnote()->kt() ?>
          </div>
        <? endif; ?>

      </section>
