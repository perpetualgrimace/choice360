<?php if($upcoming != ''): ?>

  <h2>Upcoming webinars:</h2>

  <div class="columns cards">
    <?php foreach ($upcoming->sortBy('date') as $item): ?>
      <? snippet('card', array('item' => $item, 'layout' => 'g-12')) ?>
    <?php endforeach; ?>
  </div>

<?php endif; ?>
