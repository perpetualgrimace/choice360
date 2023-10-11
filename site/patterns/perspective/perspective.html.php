<figure class="perspective u-center">
  <? if ($link != ''): ?>

  <a class="perspective__link" href="<?= $link ?>">
    <img class="perspective__img<? if ($shadow === TRUE): echo ' has-shadow'; endif ?>" src="<?= $src->url() ?>" alt="">
  </a>

  <? else: ?>

  <img class="perspective__img<? if ($shadow === TRUE): echo ' has-shadow'; endif ?>" src="<?= $src->url() ?>" alt="">

  <? endif ?>
</figure>
