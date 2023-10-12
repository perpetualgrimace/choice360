<section class="section content">
  <div class="columns g-vcenter">

    <div class="column g-6">
        <? snippet('perspective', [
          'src' => image($page->choice_magazine_img()),
          'link' => 'products/magazine',
          'shadow' => FALSE
        ]) ?>
    </div>

    <div class="column g-6 scale--lg">
      <?= $page->choice_magazine()->kirbytext() ?>
    </div>

  </div>

  <div class="columns g-vcenter">

    <figure class="column g-6 g-vcenter g-constant u-padding-none">

        <div class="column g-4">
          <img class="figure__img" src="<?= $page->image($page->choice_magazine_col1_img())->url() ?>" alt="">
        </div>

        <figcaption class="column g-8">
          <?= $page->choice_magazine_col1()->kt() ?>
        </figcaption>

    </figure>

    <figure class="column g-6 g-vcenter g-constant u-padding-none">

      <div class="column g-4">
        <img class="figure__img" src="<?= $page->image($page->choice_magazine_col3_img())->url() ?>" alt="">
      </div>

      <figcaption class="column g-8">
        <?= $page->choice_magazine_col3()->kt() ?>
      </figcaption>

    </figure>

  </div>

  </div>
</section>
