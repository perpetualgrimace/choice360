<?

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = null; endif;

  // number of items to show on each page
  $pag_num = 10;

  // archive list page with pagination
  if($page->template() == 'webinars.archive'):
    if(isset($query) && ($query != '')):
      $items = $results;
    else:
      $items = $archived->sortBy('date')->flip()->paginate($pag_num);
    endif;
    $pagination = $items->pagination();
  // webinar front page
  else:
    $items = $archived->sortBy('date')->flip()->limit('4');
  endif;

?>


<section class="section section--small_padding">
  <div class="columns <?= $alignment ?>">
    <div class="column <?= $layout ?>">

      <!-- webinars front page - archive heading -->
      <? if ($page->template() == 'webinars'): ?>
        <h2>From the archive:</h2>
      <? endif ?>

      <!-- check for a search query and display result count in a heading -->
      <? if(isset($query)): ?>

        <? if ($results->count() > 0): ?>
          <h2>Your search for &lsquo;<?= $query ?>&rsquo; returned <?= $results->count() ?> webinar<? if($results->count() > 1): echo 's'; endif ?>:</h2>

        <? elseif ($results->count() == 0): ?>
          <h2>Your search for '<?= $query ?>' returned 0 results.</h2>

          <p>Try a different search or <a href="<?= $page->url() ?>">browse archived webinars</a>.</p>

        <? endif ?>

      <? endif ?>


      <!-- display cards -->
      <? if ($items->count() != 0): ?>
        <div class="columns cards">
          <? foreach ($items as $item): ?>
            <?= pattern('card', array('item' => $item)) ?>
          <? endforeach; ?>
        </div>
      <? endif ?>


      <!-- display pagination if necessary... -->
      <? if (($page->template() == 'webinars.archive') && isset($pagination) && ($pagination->items() > $pag_num)): ?>
        <?= pattern('pagination', array('pagination' => $pagination)) ?>

      <!-- ...or link to more (if on the webinars front page) -->
      <? elseif($page->template() == 'webinars'): ?>
        <p class="more_cards">
          <a href="<?= $page->url() ?>/archive">View all webinars</a>
        </p>

      <? endif; ?>


    </div>
  </div>
</section>
