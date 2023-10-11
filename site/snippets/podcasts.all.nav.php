<?

  // check for optional variables passed from template
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  if(isset($layout)): $layout = $layout; else: $layout = 'g-4'; endif;

?>

<section class="section section--no_bottom_padding">
  <div class="columns g-fullheight g-vcenter <?= $alignment ?>">

    <aside class="column g-8">

      <h2 class="delta">Categories:</h2>

      <nav class="categories--horizontal sidebar__nav">
        <ul class="inline_list u-unbullet">

          <li class="sidebar__item">
            <a class="milli <? if (kirby()->request()->params()->category() == NULL): echo 'is-active_pg'; endif; ?>" href="<? echo url('librarianship/podcast/all/') ?>">
              All
            </a>
          </li>

          <? foreach($categories as $category): ?>
          <li class="sidebar__item">
            <a class="milli <? if($category == kirby()->request()->params()->category()): echo 'is-active_pg'; endif; ?>" href="<? echo url('librarianship/podcast/all/' . url::paramsToString(['category' => $category])) ?>">
              <?= $category ?>
            </a>
          </li>
          <? endforeach ?>

        </ul>
      </nav>

    </aside>

    <div class="column g-4 sidebar__search">
      <? snippet('search.bar', array(
        'search_target' => 'podcasts',
        'search_placeholder' => 'Search episodes...'
      )) ?>
    </div>

  </div> <!-- end opening div.columns -->
</section> <!-- end opening section -->
