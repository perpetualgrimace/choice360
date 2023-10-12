<?php

$webinars = $pages->find('librarianship/webinars')->children()->published();

$upcoming = $webinars->filterBy('date', '>', time());
$archived = $webinars->filterBy('date', '<', time());

$categories = $webinars->pluck('category', ',', true);

snippet('global.head');
snippet('global.menu');

snippet('global.header');

snippet('global.textblock');
snippet('webinars.list.upcoming', array('upcoming' => $upcoming));
snippet('webinars.sidebar', array('categories' => $categories));
snippet('webinars.list.archive', array('archived' => $archived));
snippet('global.cta');

snippet('global.footer');
