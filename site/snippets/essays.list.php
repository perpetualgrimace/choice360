<?php

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;

// number of items to show on each page (essays list page)
$pag_num = 6;

// essays list page with pagination
if($page->template() == 'essays.all'):
  if(isset($query) && ($query != '')):
    $items = $results;
  else:
    $items = $essays->sortBy('date')->flip()->paginate($pag_num);
  endif;
  $pagination = $items->pagination();
  $card_layout = 'g-6';
// essays front page
else:
  $items = $essays->sortBy('date')->flip()->limit('8');
  $card_layout = 'g-12';
endif;

?>

<!-- front page heading -->
<?php if ($page->template() == 'essays'): ?>
  <h2>Recent selections:</h2>


<!-- essays list page with pagination containers -->
<?php elseif ($page->template() == 'essays.all'): ?>
  <section class="section section--small_padding">
    <div class="columns g-fullheight <?= $alignment ?>">
      <div class="column content">

      <!-- check for a search query and display result count in a heading -->
      <?php if (isset($query)): ?>

        <?php if ($results->count() > 0): ?>
          <h2>Your search for &lsquo;<?= $query ?>&rsquo; returned <?= $results->count() ?> bibliographic essay<?php if($results->count() > 1): echo 's'; endif ?>:</h2>

        <?php elseif ($results->count() == 0): ?>
          <h2>Your search for '<?= $query ?>' returned 0 results.</h2>

          <p>Try a different search or <a href="<?= $page->url() ?>">browse all bibliographic essays</a>.</p>

        <?php endif ?>

      <?php endif ?>

<?php endif ?>

<!-- display cards -->
<?php if ($items->count() != 0): ?>
  <div class="columns cards">
    <?php foreach ($items as $item): ?>
      <?php snippet('card', array('item' => $item, 'layout' => $card_layout)) ?>
    <?php endforeach; ?>
  </div>
<?php endif ?>


<!-- display pagination if necessary... -->
<?php if (($page->template() == 'essays.all') && isset($pagination) && ($pagination->pages() > $pag_num)): ?>
  <?php snippet('pagination', array('pagination' => $pagination)) ?>

<!-- ...or link to more (if on the essays front page) -->
<?php elseif($page->template() == 'essays'): ?>
  <p class="more_cards">
    <a href="<?= $page->url() ?>/all">View all bibliographic essays</a>
  </p>

<?php endif; ?>

<!-- close containers for essays list page -->
<?php if ($page->template() == 'essays.all'): ?>
    </div>
  </div>
</section>
<!-- close containers for essays front page -->
<?php elseif ($page->template() == 'essays'): ?>
</article>
<?php endif ?>
