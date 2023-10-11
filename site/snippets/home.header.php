<?
  // check for optional variables passed from template
  if(isset($depth)): $depth = $depth; else: $depth = null; endif;
  if(isset($theme)): $theme = $theme; else: $theme = null; endif; // used in opening main block
?>

<header class="header header--home t-dark" role="banner">
  <div class="container u-left--center g-vcenter">

    <h1 class="header__headline">
      <? if($page->headline() != ''): echo $page->headline(); else: echo $site->title()->kirbytext(); endif; ?>
    </h1>

  </div>
</header>

<main role="main" class="main container <?= $depth . ' ' . $theme ?>">
