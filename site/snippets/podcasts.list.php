<?

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;

// number of items to show on each page (essays list page)
$pag_num = 6;

// episodes list page with pagination
if($page->template() == 'podcasts.all'):
  if(isset($query) && ($query != '')):
    $items = $results;
  else:
    $items = $podcasts->sortBy('date')->flip()->paginate($pag_num);
  endif;
  $pagination = $items->pagination();
  $card_layout = 'g-6';
// podcast front page
else:
  $items = $podcasts->sortBy('date')->flip()->limit('8');
  $card_layout = 'g-12';
endif;

?>

<!-- front page heading -->
<? if ($page->template() == 'podcasts'): ?>
  <h2>Recent episodes:</h2>


<!-- podcasts list page with pagination containers -->
<? elseif ($page->template() == 'podcasts.all'): ?>
  <section class="section section--small_padding">
    <div class="columns g-fullheight <?= $alignment ?>">
      <div class="column content">

      <!-- check for a search query and display result count in a heading -->
      <? if (isset($query)): ?>

        <? if ($results->count() > 0): ?>
          <h2>Your search for &lsquo;<?= $query ?>&rsquo; returned <?= $results->count() ?> episode<? if($results->count() > 1): echo 's'; endif ?>:</h2>

        <? elseif ($results->count() == 0): ?>
          <h2>Your search for '<?= $query ?>' returned 0 results.</h2>

          <p>Try a different search or <a href="<?= $page->url() ?>">browse all episodes</a>.</p>

        <? endif ?>

      <? endif ?>

<? endif ?>

<!-- display cards -->
<? if ($items->count() != 0): ?>
  <div class="columns cards">
    <? foreach ($items as $item): ?>
      <?= pattern('card', array('item' => $item, 'layout' => $card_layout)) ?>
    <? endforeach; ?>
  </div>
<? endif ?>
<!-- display pagination if necessary... -->
<? if (($page->template() == 'podcasts.all') && isset($pagination) && ($pagination->items() > $pag_num)): ?>
  <?= pattern('pagination', array('pagination' => $pagination)) ?>

<!-- ...or link to more (if on the essays front page) -->
<? elseif($page->template() == 'podcasts'): ?>
  <p class="more_cards">
    <a href="<?= $page->url() ?>/all">View all episodes</a>
  </p>

<? endif; ?>

<!-- close containers for essays list page -->
<? if ($page->template() == 'podcasts.all'): ?>
    </div>
  </div>
</section>
<!-- close containers for essays front page -->
<? elseif ($page->template() == 'podcasts'): ?>
</article>
<? endif ?>
