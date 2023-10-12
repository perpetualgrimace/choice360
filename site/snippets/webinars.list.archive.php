<?php

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
      <?php if ($page->template() == 'webinars'): ?>
        <h2>From the archive:</h2>
      <?php endif ?>

      <!-- check for a search query and display result count in a heading -->
      <?php if(isset($query)): ?>

        <?php if ($results->count() > 0): ?>
          <h2>Your search for &lsquo;<?= $query ?>&rsquo; returned <?= $results->count() ?> webinar<?php if($results->count() > 1): echo 's'; endif ?>:</h2>

        <?php elseif ($results->count() == 0): ?>
          <h2>Your search for '<?= $query ?>' returned 0 results.</h2>

          <p>Try a different search or <a href="<?= $page->url() ?>">browse archived webinars</a>.</p>

        <?php endif ?>

      <?php endif ?>


      <!-- display cards -->
      <?php if ($items->count() != 0): ?>
        <div class="columns cards">
          <?php foreach ($items as $item): ?>
            <? snippet('card', array('item' => $item)) ?>
          <?php endforeach; ?>
        </div>
      <?php endif ?>


      <!-- display pagination if necessary... -->
      <?php if (($page->template() == 'webinars.archive') && isset($pagination) && ($pagination->pages() > $pag_num)): ?>
        <? snippet('pagination', array('pagination' => $pagination)) ?>

      <!-- ...or link to more (if on the webinars front page) -->
      <?php elseif($page->template() == 'webinars'): ?>
        <p class="more_cards">
          <a href="<?= $page->url() ?>/archive">View all webinars</a>
        </p>

      <?php endif; ?>


    </div>
  </div>
</section>
