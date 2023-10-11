<? if($upcoming != ''): ?>

  <h2>Upcoming webinars:</h2>

  <div class="columns cards">
    <? foreach ($upcoming->sortBy('date') as $item): ?>
      <?= pattern('card', array('item' => $item, 'layout' => 'g-12')) ?>
    <? endforeach; ?>
  </div>

<? endif; ?>
