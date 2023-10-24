<?php

if(isset($shadow)): $shadow = $shadow; else: $shadow = TRUE; endif;
if(isset($link)): $link = $link; else: $link = FALSE; endif;

?>

<figure class="perspective u-center">
  <?php if ($link != ''): ?>

  <a class="perspective__link perspective__child" href="<?= $link ?>">
    <img class="perspective__img<?php if ($shadow === TRUE): echo ' has-shadow'; endif ?>" src="<?= $src->url() ?>" alt="">
  </a>

  <?php else: ?>

  <img class="perspective__img perspective__child<?php if ($shadow === TRUE): echo ' has-shadow'; endif ?>" src="<?= $src->url() ?>" alt="">

  <?php endif ?>
</figure>