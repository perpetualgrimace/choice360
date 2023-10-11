<?

  $category      = $page->category();
  $podcasts      = $page->siblings()->visible()->sortBy('date')->flip()->not($page);
  $related_items = $podcasts->filterBy('category', $category);
  $limit         = 4;

?>

<section class="section section--small_padding">
  <div class="columns u-left">
    <div class="column">

        <? if ($related_items->count() > 0): ?>
          <h2>More <a class="u-linked_heading" href="<?= $site->url() ?>/librarianship/podcast/all/category:<?= $category ?>"><i><?= $category ?></i></a>:</h2>

          <div class="columns cards">
            <? foreach ($related_items->limit($limit) as $item): ?>
              <?= pattern('card', array('item' => $item)) ?>
            <? endforeach; ?>
          </div>

        <? else: ?>
          <h2>More episodes:</h2>

          <div class="columns cards">
            <? foreach ($podcasts->limit($limit) as $item): ?>
              <?= pattern('card', array('item' => $item)) ?>
            <? endforeach; ?>
          </div>

        <? endif ?>


    </div>
  </div>
</section>
