<?
  // check for optional variables passed from template
  if(isset($field)): $target = $page->$field(); else: $target = $page->title(); endif;
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;

  // template type
  if(($page->date() > time()) && ($page->template() == 'webinar')):
  $category = 'upcoming webinar';

  elseif(($page->date() < time()) && ($page->template() == 'webinar')):
  $category = 'archived webinar';

  elseif($page->template() == 'event'):
  $category = 'event';

  elseif($page->template() == 'essay'):
  $category = 'essay';
  
  elseif($page->template() == 'podcast'):
  $category = 'podcast';

  else:
  $category = NULL;

  endif;
?>

<header class="title">
  <div class="columns <?= $alignment ?>">
    <section class="column content g-10">

      <h2 class="title__headline alpha"><?= $target ?></h2>

      <? if ($page->subtitle() != ''): ?>
        <h3 class="title__subtitle"><?= $page->subtitle() ?></h3>
      <? elseif ($page->issue() != ''): ?>
        <h3 class="title__subtitle"><?= $page->issue() ?></h3>
      <? endif ?>

      <p class="title__meta">

        <? if($category == 'upcoming webinar'): ?>
          Scheduled for <?= date('l, F d', $page->date()) ?> at <?= $page->time() ?>&nbsp;&nbsp; <span class="card__divider">|</span>&nbsp;&nbsp; Sponsored and presented by
          <? if($page->sponsor_url() != ''): ?><a class="u-subdued_link" href="<?= $page->sponsor_url()?>"><?= $page->sponsor_name() ?></a><? else: echo $page->sponsor_name(); endif; ?>

        <? elseif($category == 'archived webinar'): ?>
          Recorded on <?= date('F d, Y', $page->date()) ?>&nbsp;&nbsp; <span class="card__divider">|</span>&nbsp;&nbsp; Sponsored and presented by
          <? if ($page->sponsor_url() != ''): ?><a class="u-subdued_link" href="<?= $page->sponsor_url()?>"><?= $page->sponsor_name() ?></a><? else: echo $page->sponsor_name(); endif; ?>

        <? elseif($category == 'event'): ?>
          Scheduled for <? if ($page->event_date() != ''): echo $page->event_date() . ', '; endif; echo $page->date('Y') . ' '; if ($page->location() != ''): ?>in <?= $page->location(); endif; ?>

        <? elseif($category == 'essay'): ?>
          Posted on <?= date('F d, Y', $page->date()) ?> in <i><a class="u-subdued_link" href="<?= $site->url() . '/librarianship/essays/all/category:' . $page->category(); ?>"><?= $page->category() ?></a></i>

		  <? elseif($category == 'podcast'): ?>
          Posted on <?= date('F d, Y', $page->date()) ?> in <i><a class="u-subdued_link" href="<?= $site->url() . '/librarianship/podcast/all/category:' . $page->category(); ?>"><?= $page->category() ?></a></i>
		  
        <? else: ?>
          Posted on <?= date('F d, Y', $page->date()) ?> in <i><a class="u-subdued_link" href="<?= $site->url() . '/blog/articles/category:' . $page->category(); ?>"><?= $page->category() ?></a></i>
        <? endif ?>

      </p>

    </section>
  </div>
</header>
