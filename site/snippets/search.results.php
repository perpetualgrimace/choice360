<?php
  // check for optional variables passed from template
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;

  // number of items to show on each page (articles list page)
  $pag_num    = 10;
  $paginated  = $results->paginate($pag_num);
  $pagination = $paginated->pagination();
?>

<section class="section">
  <div class="columns<?php if($results->count() == 0): ?> content u-left--center<?php else: ?> u-left<?php endif ?>">
    <article class="column <?= $layout ?>">


      <!-- if results are found -->
      <?php if($results->count() != 0): ?>

        <h2>Your search for &lsquo;<?= $query ?>&rsquo; returned <?= $results->count() ?> page<?php if($results->count() > 1): echo 's'; endif ?>:</h2>

        <ol class="search">
          <?php foreach($paginated as $result): ?>
          <li class="search__item">
            <h3 class="delta search__title">
              <a class="u-linked_heading search__link" href="<?= $result->url() ?>">
                <?= $result->title() ?>
              </a>
            </h3>
            <p class="search__excerpt milli"><?php if ($result->description() != ''): echo $result->description(); else: echo
              // TODO: replace with chopper excerpt($result->text()->kirbytext(), 500);
              $result->text()->kirbytext();
            endif ?></p>
            <a class="search__more_link milli" href="<?= $result->url() ?>"><?= $result->uri() ?></a>
          </li>
          <?php endforeach ?>
        </ol>

        <?php if ($pagination->pages() > $pag_num): ?>
          <?php snippet('pagination', array('pagination' => $pagination)) ?>
        <?php endif; ?>


    <!-- if no results are found -->
    <?php elseif (($query != '') && $results->count == ''): ?>

      <h2>Your search for '<?= $query ?>' returned 0 results.</h2>

      <?= $page->text()->kirbytext() ?>


    <!-- if the user searches for just blank spaces or somehow winds up on the search page without a query -->
    <?php else: ?>

      <h2>That's not a real search.</h2>

      <p>You could try a different search or <a href="<?= $site->url() ?>">visit the home page</a>?</p>

    <?php endif ?>
