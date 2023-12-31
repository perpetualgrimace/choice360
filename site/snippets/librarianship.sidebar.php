<?php

  $products = $pages->find('products')->children()->published();
  $libs = $pages->find('librarianship')->children()->published();

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-4'; endif;

?>
    </article> <!-- end opening article -->

    <aside class="sidebar column <?= $alignment . ' ' . $layout ?>">

      <?php snippet('sidebar.librarianship') ?>

      <?php snippet('sidebar.products') ?>

    </aside>

  </div> <!-- end opening div.columns -->
</section> <!-- end opening section -->
