<section class="section content">
  <div class="columns g-vcenter">

    <div class="column g-6">
        <? snippet('perspective', [
          'src' => image($page->rcl_img()),
          'link' => 'products/rcl'
        ]) ?>
    </div>

    <div class="column g-6 scale--lg">
      <?= $page->rcl()->kirbytext() ?>
    </div>

  </div>
</section>
