<?php

$webinars   = $pages->find('librarianship/webinars')->children()->published();
$archived   = $webinars->filterBy('date', '<', time());

if($category = param('category')) {
  $archived = $archived->filterBy('category', $category, ',');
}

$categories = $webinars->filterBy('date', '<', time())->pluck('category', ',', true);

snippet('global.head');
snippet('global.menu');

snippet('global.header.condensed');

snippet('webinars.archive.nav', array('categories' => $categories));
snippet('webinars.list.archive', array('archived' => $archived));
snippet('global.cta');

snippet('global.footer');
