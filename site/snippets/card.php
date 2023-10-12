<?php

  if(isset($layout)): $layout = $layout; else: $layout = "g-6"; endif;

  // determine card type
  if(($item->template() == 'webinar') && ($item->date()->toDate() > time())):
  $category = 'upcoming webinar';

  elseif(($item->template() == 'webinar') && ($item->date()->toDate() < time())):
  $category = 'archived webinar';

  elseif($item->template() == 'event'):
  $category = 'event';

  elseif($item->template() == 'release'):
  $category = 'release';

  elseif($item->template() == 'essay'):
  $category = 'essay';

  elseif($item->template() == 'podcast'):
  $category = 'podcast';

  else:
  $category = 'article';

  endif;

?>


<div class="card column <?= $layout ?>">

  <a class="card__img_link" href="<?= $item->url() ?>" tabindex="-1">
    <img class="card__img" src="<?php
    if ($item->thumb() != ''):
      $img = $item->image($item->thumb());
      // echo thumb($img, array('width' => 100, 'height' => 66, 'crop' => true))->url();

    elseif ($item->youtube_id() != ''):
      echo 'http://img.youtube.com/vi/' . $item->youtube_id() . '/1.jpg';

    elseif ($item->hero() != ''):
      $img = $item->image($item->hero());
      echo thumb($img, array('width' => 100, 'height' => 66, 'crop' => true))->url();

    elseif ($item->parent()->file('placeholder.png')):
      echo $item->parent()->file('placeholder.png')->url();

    endif ?>" draggable="false" alt="">
  </a>

  <div class="card__info">

    <h3 class="card__label">
      <a class="card__label_link heading u-linked_heading <?php if($page->isHomePage()): echo 'gamma'; else: echo 'delta'; endif;?>" href="<?= $item->url() ?>" tabindex="-1">
        <?= $item->title() ?>
      </a>
    </h3>

    <p class="card__meta milli">

      <?php if($category == 'upcoming webinar'): ?>
        <?= date('l, F d', $item->date()->toDate()) ?> at <?= $item->time() ?>&nbsp;&nbsp; <span class="card__divider">|</span>&nbsp;&nbsp; Sponsored and presented by
        <?php if($item->sponsor_url() != ''): ?><a class="u-subdued_link" href="<?= $item->sponsor_url()?>"><?= $item->sponsor_name() ?></a><?php else: echo $item->sponsor_name(); endif; ?>

      <?php elseif($category == 'archived webinar'): ?>
        <?= date('m/d/y', $item->date()->toDate()) ?>&nbsp;&nbsp; <span class="card__divider">|</span>&nbsp;&nbsp; Sponsored and presented by:
        <?php if ($item->sponsor_url() != ''): ?><a class="u-subdued_link" href="<?= $item->sponsor_url()?>"><?= $item->sponsor_name() ?></a><?php else: echo $item->sponsor_name(); endif; ?>

      <?php elseif($category == 'event'): ?>
        <?php if($item->event_date() != ''): echo $item->event_date(); else: echo 'Date TBA'; endif ?>&nbsp;&nbsp; <span class="card__divider">|</span>&nbsp;&nbsp; <?php if($item->location() != ''): echo $item->location(); else: echo 'Location TBA'; endif ?>

      <?php elseif($category == 'release'): ?>
        Posted on <?= date('m/d/y', $item->date()->toDate()) ?> in Press Releases

	  <?php elseif($category == 'podcast'): ?>
        Posted on <?= date('m/d/y', $item->date()->toDate()) ?> in <i><?= $item->category() ?></i>

      <?php else: ?>
        Posted on <?= date('m/d/y', $item->date()->toDate()) ?> in <i><?= $item->category() ?></i>
      <?php endif ?>
    </p>


    <p class="card__cta<?php if($page->isHomePage()): echo ' card__cta--with_description'; endif;?>">

      <?php if(($category == 'article') && $page->isHomePage()): ?>
        <span class="card__description">
          <?php if($item->description() != ''): ?>
            <?= $item->description() ?>
          <?php else: ?>
            <?php // TODO: replace with chopper = excerpt($item->text(), 25, 'words') ?>
          <?php endif; ?>
        </span>
      <?php endif ?>

      <a class="card__cta_link milli" href="<?= $item->url() ?>">
        <?php if($category == 'upcoming webinar'): ?>
        Learn more <span class="u-screenreader">for <?= $item->title() ?></span>

        <?php elseif($category == 'archived webinar'): ?>
        View webinar<span class="u-screenreader">: <?= $item->title() ?></span>

        <?php elseif($category == 'event'): ?>
        Learn more<span class="u-screenreader">: <?= $item->title() ?></span>

      <?php elseif($category == 'essay'): ?>
        Read essay<span class="u-screenreader">: <?= $item->title() ?></span>

	  <?php elseif($category == 'podcast'): ?>
        Listen to the episode<span class="u-screenreader">: <?= $item->title() ?></span>

        <?php else: ?>
        Read article<span class="u-screenreader">: <?= $item->title() ?></span>

        <?php endif ?>
      </a>
    </p>

  </div>

</div>
