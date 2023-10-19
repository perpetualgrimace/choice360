<?php

$essays = $pages->find('librarianship/essays')->children()->listed();

$categories = $essays->pluck('category', ',', true);

snippet('global.head');
snippet('global.menu');

snippet('global.header');

snippet('global.textblock');
snippet('essays.list', array('essays' => $essays));
snippet('essays.sidebar', array('categories' => $categories));
snippet('global.cta');

snippet('global.footer');
