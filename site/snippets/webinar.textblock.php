<?php
  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;

  if($page->date()->toDate() > time()):
  $category = 'upcoming webinar';

  elseif($page->date()->toDate() < time()):
  $category = 'archived webinar';

  endif;

?>

<section class="section">
  <div class="columns g-fullheight <?= $alignment ?>">
    <article class="column content article-border <?= $layout ?>">

      <section>

        <?php if ($page->youtube_id() != ''): ?>
        <div class="u-video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= $page->youtube_id() ?>" frameborder="0" allowfullscreen></iframe>
        </div>
        <?php endif; ?>


        <?= $page->text()->kirbytext() ?>


        <?php if($category == 'upcoming webinar'): ?>
          <h2>Register for this webinar</h2>

          <p>
            <a href="<?= $page->registration_url() ?>" class="button">Go</a>
          </p>
        <?php endif ?>

      </section>
