<?

  // main menu items
  $items = $pages->visible();

  // text that applies next to menu icon
  $menutext = 'menu';

  // check for optional variables passed from template
  if(isset($depth)): $depth = $depth; else: $depth = 'u-front'; endif;
  if(isset($theme)): $theme = $theme; else: $theme = null; endif;
  if(isset($alignment)): $alignment = $alignment; else: $alignment = 'u-left'; endif;

?>

<div class="nav_container <?= $depth . ' ' . $theme ?>">
  <nav class="nav_main container" role="navigation">

    <!-- logo -->
    <a class="nav_logo" href="<? if($page->isHomePage()): echo '#top'; else: echo url(); endif ?>">
      <div class="nav_logo__img<? if($page->isHomePage()): echo ' is-active_pg'; endif ?>">
        <span class="u-screenreader">
          <?= $site->title(); if($site->tagline() != ''): echo ': ' . $site->tagline(); endif; ?>
        </span>
      </div>
    </a>

    <!-- nav toggle -->
    <a class="js-nav_toggle nav_toggle" href="#nav__menu">
      <div class="js-nav_hamburger nav_hamburger is-inactive">
        <span class="nav_hamburger__bun nav_hamburger__bun--top"></span>
        <span class="nav_hamburger__bun nav_hamburger__bun--patty"></span>
        <span class="nav_hamburger__bun nav_hamburger__bun--bottom"></span>
      </div>
      <span class="nav_toggle__text delta"><?= $menutext ?></span>
    </a>

    <!-- main nav -->
    <ul class="nav_main__list js-nav__main is-collapsed" role="group">

    <? foreach($items as $item): ?>

      <li class="nav_main__item<? if (($item->hasChildren()) && (in_array($item->uri(), $site->dropdownable()->yaml()))): echo ' has-dropdown'; endif; ?>" role="menuitem">
        <a <? if($items->first()->title() == $item->title()): echo 'id="nav__menu " '; endif ?>class="nav_main__link <? e($item->isOpen(), 'is-active_pg') ?>" href="<? if($item->isOpen() && ($page->slug() == $item->slug())): echo '#top'; else: echo $item->url(); endif ?>">
          <?= $item->title(); if(strtolower($item->title()) == 'about'): echo '<span class="u-screenreader"> ' . $site->title() . '</span>'; endif; ?>
        </a>

        <!-- dropdown, checked against $site->dropdownable() list -->
        <? if($item->hasChildren() &&
        in_array($item->uri(), $site->dropdownable()->yaml())): ?>

        <!-- dropdown list -->
        <ul class="nav_dropdown__list" role="group" aria-label="submenu">

        <? foreach($item->children()->visible() as $child): ?>
          <li class="nav_dropdown__item" role="menuitem">
            <a class="nav_dropdown__link<? e($child->isOpen(), ' is-active_pg') ?>" href="<? if($child->isOpen() && ($page->slug() == $child->slug())): echo '#top'; else: echo $child->url(); endif ?>" role="menuitem" aria-haspopup="true">
              <?= $child->title() ?>
            </a>
          </li>

          <!-- l3 page dropdown, checked against $site->lv3dropdown() -->
          <? if($child->hasChildren() &&
                  ($site->lv3dropdown()->bool() === true) &&
                  ($item->slug() != 'librarianship')): ?>

          <li class="nav_nested">
            <ul class="nav_nested__list" role="group" aria-label="submenu">
              <? foreach($child->children()->visible() as $grandchild): ?>
              <li class="nav_nested__item" role="menuitem">
                <a class="nav_nested__link<? e($grandchild->isOpen(), ' is-active_pg') ?>" href="<? if($grandchild->isOpen() && ($page->slug() == $grandchild->slug())): echo '#top'; else: echo $grandchild->url(); endif ?>">
                  <span class="u-screenreader">Subcategory </span><?= $grandchild->title() ?>
                </a>
              </li>
              <? endforeach ?>
            </ul>
          </li>

          <? endif ?>
        <? endforeach ?>

        </ul>

        <? endif ?>

      </li>

    <? endforeach ?>

    </ul>
  </nav>
</div>

<div class="nav_offset"></div>
