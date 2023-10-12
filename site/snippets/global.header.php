<?php
  // check for optional variables passed from template
  if(isset($depth)): $depth = $depth; else: $depth = null; endif;
  if(isset($theme)): $theme = $theme; else: $theme = null; endif; // used in opening main block
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
  // check the depth of the page within the site hierarchy
  if($page->depth() == 2): $page_depth = 'is-l2';
    elseif($page->depth() > 2): $page_depth = 'is-l3';
    else: $page_depth = null;
  endif;
?>

<header role="banner">
  <div class="header t-dark <?= $depth . ' ' . $page_depth ?>">
    <div class="container u-left--center g-vcenter">
      <h1 class="header__headline">
        <?php if($page->headline() != ''): echo $page->headline(); else: echo $page->title(); endif; ?>
      </h1>
      <?php if ($page->subhead() != ''): ?>
      <h2 class="header__subhead delta"><?= $page->subhead() ?></h2>
      <?php endif ?>
    </div>
  </div>

  <nav class="breadcrumbs" role="navigation">
    <ul class="breadcrumbs__list container inline_list">

    <?php foreach($site->breadcrumb() as $crumb): ?>
      <?php if($crumb->uri() != 'home'): ?>

      <li class="breadcrumbs__item">
        <a class="breadcrumbs__link milli<?php e(($crumb->slug() == $page->slug()), ' is-active_pg') ?>" href="<?= $crumb->url() ?>">
          <?= $crumb->title() ?>
        </a>
      </li>

      <?php endif ?>
    <?php endforeach ?>

    </ul>
  </nav>
</header>

<main role="main" class="main container <?= $depth . ' ' . $theme ?>">
