<?

  $products = $pages->find('products')->children()->visible();
  $libs = $pages->find('librarianship')->children()->visible();

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-4'; endif;

?>
    </article> <!-- end opening article -->

    <aside class="sidebar column <?= $alignment . ' ' . $layout ?>">

      <? snippet('sidebar.librarianship') ?>

      <? snippet('sidebar.products') ?>
	  
	  <? snippet('sidebar.cca') ?>

    </aside>

  </div> <!-- end opening div.columns -->
</section> <!-- end opening section -->
