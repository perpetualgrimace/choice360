<figure class="figure">
  <img class="figure__img" src="<?= $src->url() ?>" alt="" />

  <? if($caption): ?>
  <figcaption>
    <?= $caption->kirbytext() ?>
  </figcaption>
  <? endif ?>
</figure>
