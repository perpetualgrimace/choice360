<section class="section content">
  <div class="columns g-vcenter">

    <div class="column g-6">
        <? snippet('perspective', [
          'src' => image($page->ccadvisor_img()),
          'link' => 'products/reviews'
        ]) ?>
    </div>

    <div class="column g-6 scale--lg">
      <?= $page->ccadvisor()->kirbytext() ?>
    </div>

  </div>
</section>
