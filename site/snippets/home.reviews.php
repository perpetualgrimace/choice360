<section class="section content">
  <div class="columns g-vcenter">

    <div class="column g-6">
        <?php snippet('perspective', [
          'src' => image($page->choice_reviews_img()),
          'link' => 'products/reviews'
        ]) ?>
    </div>

    <div class="column g-6 scale--lg">
      <?= $page->choice_reviews()->kirbytext() ?>
    </div>

  </div>

  <div class="columns u-center g-bordered">
    <div class="column g-4">
      <?php snippet('big_number', [
        'number' => $page->Choice_reviews_col1_num(),
        'label' => $page->Choice_reviews_col1_label()
      ]) ?>
    </div>

    <div class="column g-4">
      <?php snippet('big_number', [
        'number' => $page->Choice_reviews_col2_num(),
        'label' => $page->Choice_reviews_col2_label()
      ]) ?>
    </div>

    <div class="column g-4">
      <?php snippet('big_number', [
        'number' => $page->Choice_reviews_col3_num(),
        'label' => $page->Choice_reviews_col3_label()
      ]) ?>
    </div>

  </div>
</section>
