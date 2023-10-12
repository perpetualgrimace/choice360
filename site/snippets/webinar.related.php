<?php

  $webinars = $pages->find('librarianship/webinars')->children()->published();

  $upcoming = $webinars->filterBy('date', '>', time());
  $archived = $webinars->filterBy('date', '<', time());

  // page template
  if($page->date()->toDate() > time()):
  $category = 'upcoming webinar';

  elseif($page->date()->toDate() < time()):
  $category = 'archived webinar';

  endif;

  // upcoming webinars
  $upcoming_items = $upcoming->sortBy('date')->flip()->not($page)->limit('4');
  $archived_items = $archived->sortBy('date')->flip()->not($page)->limit('4');

?>

<section class="section section--small_padding">
  <div class="columns u-left">
    <div class="column">

        <?php if (($category == 'upcoming webinar') && ($upcoming_items->count() > 1)): ?>
          <h2>More upcoming webinars:</h2>

          <div class="columns cards">
            <?php foreach ($upcoming_items as $item): ?>
              <? snippet('card', array('item' => $item)) ?>
            <?php endforeach; ?>
          </div>

        <?php else: ?>
          <h2>More from the archive:</h2>

          <div class="columns cards">
            <?php foreach ($archived_items as $item): ?>
              <? snippet('card', array('item' => $item)) ?>
            <?php endforeach; ?>
          </div>

        <?php endif ?>


    </div>
  </div>
</section>
