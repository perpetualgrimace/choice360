<?php

// set search scope
if (isset($search_target) && ($search_target == 'articles')): // passed from template
$search_url = $pages->find('blog/articles')->url();

elseif (isset($search_target) && ($search_target == 'webinars')): // passed from template
$search_url = $pages->find('librarianship/webinars/archive')->url();

elseif (isset($search_target) && ($search_target == 'essays')): // passed from template
$search_url = $pages->find('librarianship/essays/all')->url();

elseif (isset($search_target) && ($search_target == 'podcasts')): // passed from template
$search_url = $pages->find('librarianship/podcast/all')->url();

else:
$search_url = $pages->find('search')->url();

endif;

// set search text input placeholder text
if (isset($search_placeholder)): // passed from template
$search_placeholder = $search_placeholder;

elseif ($page->template() == 'error'):
$search_placeholder = 'Search site...';

else:
$search_placeholder = 'Type and hit enter';

endif;

?>

<form class="search u-append_button" method="get" action="<?= $search_url ?>">

  <input class="search__input milli" type="search" name="q" placeholder="<?= $search_placeholder ?>">

  <button class="search__submit milli button" type="submit"><?php snippet('icon--search') ?><span class="u-screenreader">Search</span></button>

</form>
