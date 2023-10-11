<?

  $category       = $page->category();
  $template       = $page->template();

  $blogs          = $page->siblings()->visible()->sortBy('date')->flip()->not($page);
  $articles       = $blogs->filterBy('template', 'article');
  $related_items  = $blogs->filterBy('category', $category)->filterBy('template', $template);

  if ($template == 'release'): $template = 'press release'; endif;
  if ($template == 'event'): $related_items = $related_items->filterBy('date', '>', time()); endif;
  $limit          = 6;

?>

<section class="section section--small_padding">
  <div class="columns u-left">
    <div class="column">

        <? if ($related_items->count() > 0): ?>
          <h2>More <a class="u-linked_heading" href="articles/category:<?= $category ?>"><i><?= $category ?></i></a> <?= $template ?>s:</h2>

          <div class="columns cards">
            <?php if ($template == 'press release'): $layout = 'g-6'; else: $layout = 'g-4'; endif; ?>

            <? foreach ($related_items->limit($limit) as $item): ?>
              <?= pattern('card', array('item' => $item, 'layout' => $layout)) ?>
            <? endforeach; ?>
          </div>

        <? else: ?>
          <h2>More articles:</h2>

          <div class="columns cards">
            <? foreach ($articles->limit($limit) as $item): ?>
              <?= pattern('card', array('item' => $item, 'layout' => 'g-4')) ?>
            <? endforeach; ?>
          </div>

        <? endif ?>


    </div>
  </div>
</section>
