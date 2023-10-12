<?php

  $category      = $page->category();
  $podcasts      = $page->siblings()->published()->sortBy('date')->flip()->not($page);
  $related_items = $podcasts->filterBy('category', $category);
  $limit         = 4;

?>

<section class="section section--small_padding">
  <div class="columns u-left">
    <div class="column">

        <?php if ($related_items->count() > 0): ?>
          <h2>More <a class="u-linked_heading" href="<?= $site->url() ?>/librarianship/podcast/all/category:<?= $category ?>"><i><?= $category ?></i></a>:</h2>

          <div class="columns cards">
            <?php foreach ($related_items->limit($limit) as $item): ?>
              <?php snippet('card', array('item' => $item)) ?>
            <?php endforeach; ?>
          </div>

        <?php else: ?>
          <h2>More episodes:</h2>

          <div class="columns cards">
            <?php foreach ($podcasts->limit($limit) as $item): ?>
              <?php snippet('card', array('item' => $item)) ?>
            <?php endforeach; ?>
          </div>

        <?php endif ?>


    </div>
  </div>
</section>
