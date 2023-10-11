<?
  // check for optional variables passed from template
  if(isset($depth)): $depth = $depth; else: $depth = null; endif;
  if(isset($theme)): $theme = $theme; else: $theme = null; endif; // used in opening main block
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;
?>

<header role="banner">
  <div class="header t-dark header--condensed">
    <div class="container u-left--center g-vcenter">
      <h1 class="header__headline gamma">
        <?= $page->parent()->headline() ?>
      </h1>
    </div>
  </div>

  <nav class="breadcrumbs" role="navigation">
    <ul class="breadcrumbs__list container inline_list">

    <? foreach($site->breadcrumb() as $crumb): ?>
      <? if($crumb->uri() != 'home'): ?>

      <li class="breadcrumbs__item">
        <a class="breadcrumbs__link milli<? e(($crumb->slug() == $page->slug()), ' is-active_pg') ?>" href="<?= $crumb->url() ?>">
          <?= $crumb->title() ?>
        </a>
      </li>

      <? endif ?>
    <? endforeach ?>

    </ul>
  </nav>
</header>

<main role="main" class="main container <?= $depth . ' ' . $theme ?>">
