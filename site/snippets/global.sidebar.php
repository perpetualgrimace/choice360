<?php

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-4'; endif;

?>
    </article> <!-- end opening article -->

    <aside class="sidebar column <?= $alignment . ' ' . $layout ?>">

      <?php snippet('sidebar.products') ?>

      <?php if ($page->template() == 'products' || $page->template() == 'product.reviews'): ?>
        <?php snippet('sidebar.tablet') ?>
      <?php endif ?>

      <?php snippet('sidebar.librarianship') ?>

    </aside>

  </div> <!-- end opening div.columns -->
</section> <!-- end opening section -->
