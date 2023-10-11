<?

  $webinars = $pages->find('librarianship/webinars')->children()->visible();

  $upcoming = $webinars->filterBy('date', '>', time());
  $archived = $webinars->filterBy('date', '<', time());

  // page template
  if($page->date() > time()):
  $category = 'upcoming webinar';

  elseif($page->date() < time()):
  $category = 'archived webinar';

  endif;

  // upcoming webinars
  $upcoming_items = $upcoming->sortBy('date')->flip()->not($page)->limit('4');
  $archived_items = $archived->sortBy('date')->flip()->not($page)->limit('4');

?>

<section class="section section--small_padding">
  <div class="columns u-left">
    <div class="column">

        <? if (($category == 'upcoming webinar') && ($upcoming_items->count() > 1)): ?>
          <h2>More upcoming webinars:</h2>

          <div class="columns cards">
            <? foreach ($upcoming_items as $item): ?>
              <?= pattern('card', array('item' => $item)) ?>
            <? endforeach; ?>
          </div>

        <? else: ?>
          <h2>More from the archive:</h2>

          <div class="columns cards">
            <? foreach ($archived_items as $item): ?>
              <?= pattern('card', array('item' => $item)) ?>
            <? endforeach; ?>
          </div>

        <? endif ?>


    </div>
  </div>
</section>
