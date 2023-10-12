<figure class="figure">
  <img class="figure__img" src="<?= $src->url() ?>" alt="" />

  <?php if($caption): ?>
  <figcaption>
    <?= $caption->kirbytext() ?>
  </figcaption>
  <?php endif ?>
</figure>
