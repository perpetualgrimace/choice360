<?php $libs = $pages->find('librarianship')->children()->published(); ?>

<h2 class="gamma">Librarianship</h2>

<nav class="sidebar__nav">
  <ul class="u-unbullet">
  <?php foreach($libs as $lib): ?>

    <li class="sidebar__item">
      <a class="sidebar__link <?php
      if( ($lib->slug() == $page->slug()) OR ($page->isChildOf($lib)) ):
        echo 'is-active_pg'; endif; ?>" href="<?= $lib->url() ?>">
        <?= $lib->title() ?>
      </a>
    </li>

  <?php endforeach ?>

    <li class="sidebar__item">
      <a class="sidebar__link" href="<?= $pages->find('blog')->url() ?>">
        <?= $pages->find('blog')->headline() ?>
      </a>
    </li>

  </ul>
</nav>
