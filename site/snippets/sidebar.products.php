<? $products = $pages->find('products')->children()->visible(); ?>

<h2 class="gamma">Products</h2>

<nav class="sidebar__nav">
  <ul class="u-unbullet">
  <? foreach($products as $product): ?>

    <li class="sidebar__item">
      <a class="sidebar__link <?
      if( ($product->slug() == $page->slug()) OR ($page->isChildOf($product)) ):
        echo 'is-active_pg'; endif; ?>" href="<?= $product->url() ?>">
        <?= $product->title() ?>
      </a>
    </li>

  <? endforeach ?>
  </ul>
</nav>
