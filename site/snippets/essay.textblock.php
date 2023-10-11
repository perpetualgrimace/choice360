<?
  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;

  // header image
  if($page->image('hero.jpg')):
  $hero = $page->image('hero.jpg');

  elseif($page->image('hero.png')):
  $hero = $page->image('hero.png');

  else: $hero = NULL;

  endif;

?>

<section class="section">
  <div class="columns g-fullheight <?= $alignment ?>">
    <article class="column content article-border <?= $layout ?>">

      <section class="scale--lg">

        <? if ($hero != NULL): ?>
        <figure class="content__hero">
          <img src="<?= $hero->url() ?>" alt="" />
          <? if ($page->hero_caption() != ''): ?>
            <figcaption><?= $page->hero_caption(); ?></figcaption>
          <? endif; ?>
        </figure>
        <? endif ?>

        <h3>Introduction:</h3>

        <?= kirbytext(excerpt($page->text(), 100, 'words')) ?>

        <? if ($page->libguides_url() != ''): ?>
          <p><a class="button" href="<?= $page->libguides_url() ?>">View the full essay<span class="u-screenreader"> on the ala-choice libguides site</span></a></p>
        <? endif; ?>

        <? if ($page->byline() != ''): ?>
          <h3>About the author:</h3>
          <div class="scale--normal">
            <?= $page->byline()->kt() ?>
          </div>
        <? endif; ?>

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
