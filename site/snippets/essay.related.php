<?php

  $category      = $page->category();
  $essays        = $page->siblings()->published()->sortBy('date')->flip()->not($page);
  $related_items = $essays->filterBy('category', $category);
  $limit         = 4;

?>

<section class="section section--small_padding">
  <div class="columns u-left">
    <div class="column">

        <?php if ($related_items->count() > 0): ?>
          <h2>More <a class="u-linked_heading" href="<?= $site->url() ?>/librarianship/essays/category:<?= $category ?>"><i><?= $category ?></i></a> essays:</h2>

          <div class="columns cards">
            <?php foreach ($related_items->limit($limit) as $item): ?>
              <? snippet('card', array('item' => $item)) ?>
            <?php endforeach; ?>
          </div>

        <?php else: ?>
          <h2>More essays:</h2>

          <div class="columns cards">
            <?php foreach ($essays->limit($limit) as $item): ?>
              <? snippet('card', array('item' => $item)) ?>
            <?php endforeach; ?>
          </div>

        <?php endif ?>


    </div>
  </div>
</section>
