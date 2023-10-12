<?php

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-4'; endif;

?>

    <aside class="sidebar column <?= $alignment . ' ' . $layout ?>">

      <?php snippet('search.bar', array(
        'search_target' => 'articles',
        'search_placeholder' => 'Search articles...'
      )) ?>

      <h2 class="delta">Categories:</h2>

      <nav class="sidebar__nav">
        <ul class="u-unbullet">

          <?php foreach($categories as $category): ?>
          <li class="sidebar__item">
            <a class="milli" href="<?php echo url('blog/articles/' . url::paramsToString(['category' => $category])) ?>">
              <?= $category ?>
            </a>
          </li>
          <?php endforeach ?>

        </ul>
      </nav>

    </aside>

  </div> <!-- end opening div.columns -->
</section> <!-- end opening section -->
