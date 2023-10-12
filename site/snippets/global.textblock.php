<?php
  // check for optional variables passed from template
  if(isset($field)): $target = $page->$field(); else: $target = $page->text(); endif;
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-8'; endif;
?>

<section class="section">
  <div class="columns g-fullheight <?= $alignment ?>">
    <article class="column content article-border <?= $layout ?>">

      <?php if ($target != ''): ?>
        <section class="scale--lg">
          <?php e($target != "", $target->kt()) ?>
        </section>
      <?php endif ?>

      <!-- affiliate links -->
      <?php if ($page->affiliates() != ''): ?>
        <ul class="scale--normal affiliate-list u-unbullet">
          <?php foreach($page->affiliates()->toStructure() as $affiliate) {
            snippet("affiliate", ["affiliate" => $affiliate]);
          } ?>
        </ul>
      <?php endif ?>
