<?
  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;

  // list of products
  $products = ['reviews', 'magazine', 'ccadvisor', 'cards', 'rcl', 'acrl'];

?>


<div class="columns scale--normal u-no_margin">
  <div class="column">

    <? foreach ($products as $product):
      $productText = $page->$product()->kt();
      $productImgTitle = $product . '_img';
    ?>

      <div class="g-vcenter columns">

        <!-- straight ahead image -->
        <? if ($product == 'cards' || $product == 'acrl'): ?>
          <div class="column g-4">
            <img src='<?= $page->image($page->$productImgTitle())->url() ?>' alt="">
          </div>


        <!-- perspective image -->
        <? else:
          // to shadow or not to shadow
          if ($product == 'magazine') { $shadow = FALSE; } else { $shadow = TRUE; }
        ?>
          <div class="column g-4">
            <?= pattern('perspective', [
              'src' => $page->image($page->$productImgTitle()),
              'shadow' => $shadow
            ]) ?>
          </div>


        <? endif ?>

        <!-- caption -->
          <div class="column g-8">
            <?= $productText ?>
          </div>

        </div><!-- .columns -->

    <? endforeach ?>

  </div>
</div>
