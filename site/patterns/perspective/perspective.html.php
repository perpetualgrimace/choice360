<figure class="perspective u-center">
  <?php if ($link != ''): ?>

  <a class="perspective__link" href="<?= $link ?>">
    <img class="perspective__img<?php if ($shadow === TRUE): echo ' has-shadow'; endif ?>" src="<?= $src->url() ?>" alt="">
  </a>

  <?php else: ?>

  <img class="perspective__img<?php if ($shadow === TRUE): echo ' has-shadow'; endif ?>" src="<?= $src->url() ?>" alt="">

  <?php endif ?>
</figure>
