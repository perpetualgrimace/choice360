<?
  // check for optional variables passed from template
  if(isset($field)): $target = $page->$field(); else: $target = $page->text(); endif;
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'scale--normal'; endif;
?>

<section class="section section--nested scale--lg <?= $field . ' ' . $layout ?>">
  <?= $target->kirbytext() ?>
</section>
