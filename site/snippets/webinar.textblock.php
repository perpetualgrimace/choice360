<?
  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;

  if($page->date() > time()):
  $category = 'upcoming webinar';

  elseif($page->date() < time()):
  $category = 'archived webinar';

  endif;

?>

<section class="section">
  <div class="columns g-fullheight <?= $alignment ?>">
    <article class="column content article-border <?= $layout ?>">

      <section>

        <? if ($page->youtube_id() != ''): ?>
        <div class="u-video">
          <iframe width="560" height="315" src="http://www.youtube.com/embed/<?= $page->youtube_id() ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <? endif; ?>


        <?= $page->text()->kirbytext() ?>


        <? if($category == 'upcoming webinar'): ?>
          <h2>Register for this webinar</h2>

          <p>
            <a href="<?= $page->registration_url() ?>" class="button">Go</a>
          </p>
        <? endif ?>

      </section>
