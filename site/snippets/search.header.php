<?
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
  <div class="header header--search t-dark <?= $depth . ' ' . $page_depth ?>" role="banner">
    <div class="container u-left--center">
      <div class="columns">
      <h1 class="header__headline column g-8 g-center gamma">
        <? if($page->headline() != ''): echo $page->headline(); else: echo $page->title(); endif; ?>
          <? snippet('search.bar') ?>
      </h1>
    </div>
    </div>
  </div>
</header>

<main role="main" class="main container <?= $depth . ' ' . $theme ?>">
