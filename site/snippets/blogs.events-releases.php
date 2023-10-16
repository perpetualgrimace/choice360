<?php

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;

  $count = $events->published()->count();
  if ($count > 0): $count = $count; $card_layout = ''; else: $count = 2; $card_layout = 'g-6'; endif;

?>

<section class="section section--no_bottom_padding">
  <div class="columns g-fullheight <?= $alignment ?>">

    <?php if ($events->count() > 0): ?>
    <div class="column">

      <h2>Upcoming events</h2>

      <div class="columns cards">
        <?php foreach ($events->published() as $item): ?>
          <?php snippet('card', array('item' => $item, 'layout' => '')) ?>
        <?php endforeach; ?>
      </div>

    </div>
    <?php endif; ?>

    <div class="column">

      <h2>Press releases</h2>

      <div class="columns cards">
        <?php foreach ($releases->published() as $item): ?>
          <?php snippet('card', array('item' => $item, 'layout' => '')) ?>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>
