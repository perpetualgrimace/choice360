<?php

if(isset($shadow)): $shadow = $shadow; else: $shadow = TRUE; endif;
if(isset($link)): $link = $link; else: $link = FALSE; endif;

?>

<figure class="perspective u-center">
  <?php if ($link != ''): ?>

  <a class="perspective__link" href="<?= $link ?>">
    <img class="perspective__img<?php if ($shadow === TRUE): echo ' has-shadow'; endif ?>" src="<?= $src ?>" alt="">
  </a>

  <?php else: ?>

  <img class="perspective__img<?php if ($shadow === TRUE): echo ' has-shadow'; endif ?>" src="<?= $src ?>" alt="">

  <?php endif ?>
</figure>