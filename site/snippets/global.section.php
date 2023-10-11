<?
  // check for optional variables passed from template
  if(isset($field)): $target = $page->$field(); else: $target = $page->text(); endif;
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = null; endif;
?>

<section class="section content">
  <div class="columns <?= $alignment ?>">
    <div class="column <?= $layout ?>">

      <?= $target->kirbytext() ?>

    </div>
  </div>
</section>
