<?php

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;

  // number of items to show on each page (articles list page)
  $pag_num = 12;

  // articles list page with pagination
  if($page->template() == 'articles'):
    if(isset($query) && ($query != '')):
      $items = $results;
    else:
      $items = $articles->sortBy('date')->flip()->paginate($pag_num);
    endif;
    $pagination = $items->pagination();
    $card_layout = 'g-4';
  // blog front page
  else:
    $items = $articles->sortBy('date')->flip()->limit('8');
    $card_layout = 'g-6';
  endif;

?>


<section class="section<?php if ($page->template() == 'articles'): ?> section--small_padding<?php endif ?>">
  <div class="columns g-fullheight <?= $alignment ?>">
    <div class="column content <?php if ($page->template() != 'articles'): ?> article-border<?php endif ?> <?= $layout ?>">

      <!-- blog front page heading -->
      <?php if ($page->template() == 'blogs'): ?>
        <h2>Articles</h2>
      <?php endif ?>

      <!-- check for a search query and display result count in a heading -->
      <?php if (isset($query)): ?>

        <?php if ($results->count() > 0): ?>
          <h2>Your search for &lsquo;<?= $query ?>&rsquo; returned <?= $results->count() ?> article<?php if($results->count() > 1): echo 's'; endif ?>:</h2>

        <?php elseif ($results->count() == 0): ?>
          <h2>Your search for '<?= $query ?>' returned 0 results.</h2>

          <p>Try a different search or <a href="<?= $page->url() ?>">browse all articles</a>.</p>

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
      <?php if (($page->template() == 'articles') && isset($pagination) && ($pagination->pages() > $pag_num)): ?>
        <?php snippet('pagination', array('pagination' => $pagination)) ?>

      <!-- ...or link to more (if on the blog front page) -->
      <?php elseif($page->template() == 'blogs'): ?>
        <p class="more_cards">
          <a href="<?= $page->url() ?>/articles">View all articles</a>
        </p>

      <?php endif; ?>

    </div>
<!-- close out the container if using the articles template -->
<?php if($page->template() == 'articles'): ?>
  </div>
</section>
<?php endif ?>
