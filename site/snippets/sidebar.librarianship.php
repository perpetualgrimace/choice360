<? $libs = $pages->find('librarianship')->children()->visible(); ?>

<h2 class="gamma">Librarianship</h2>

<nav class="sidebar__nav">
  <ul class="u-unbullet">
  <? foreach($libs as $lib): ?>

    <li class="sidebar__item">
      <a class="sidebar__link <?
      if( ($lib->slug() == $page->slug()) OR ($page->isChildOf($lib)) ):
        echo 'is-active_pg'; endif; ?>" href="<?= $lib->url() ?>">
        <?= $lib->title() ?>
      </a>
    </li>

  <? endforeach ?>

    <li class="sidebar__item">
      <a class="sidebar__link" href="<?= $pages->find('blog')->url() ?>">
        <?= $pages->find('blog')->headline() ?>
      </a>
    </li>

  </ul>
</nav>
