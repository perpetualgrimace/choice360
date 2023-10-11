<?

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;

  $count = $events->visible()->count();
  if ($count > 0): $count = $count; $card_layout = ''; else: $count = 2; $card_layout = 'g-6'; endif;

?>

<section class="section section--no_bottom_padding">
  <div class="columns g-fullheight <?= $alignment ?>">

    <? if ($events->count() > 0): ?>
    <div class="column">

      <h2>Upcoming events</h2>

      <div class="columns cards">
        <? foreach ($events->visible() as $item): ?>
          <?= pattern('card', array('item' => $item, 'layout' => '')) ?>
        <? endforeach; ?>
      </div>

    </div>
    <? endif; ?>

    <div class="column">

      <h2>Press releases</h2>

      <span>
	  
		<a href="blog/articles/category:Press%20Releases">
		<img height="66" src="blog/archive_color.png">
		</img></a>
	  </span>
	   

    </div>


  </div>
</section>
