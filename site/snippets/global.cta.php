<?php
  // check for optional variables passed from template
  if(isset($field)): $target = $page->$field(); else: $target = $page->text(); endif;
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = null; endif;
?>

<section class="section cta">
  <div class="columns u-center">
    <div class="column g-9 g-center scale--xl">

      <?= $page->cta()->kirbytext() ?>

    </div>
  </div>
</section>
