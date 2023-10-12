<?php

$essays = $pages->find('librarianship/essays')->children()->published()->sortBy('date');

$categories = $essays->filterBy('date', '<', time())->pluck('category', ',', true);

snippet('global.head');
snippet('global.menu');

snippet('global.header.condensed');

snippet('essays.all.nav', array('essays' => $essays, 'categories' => $categories));
snippet('essays.list', array('essays' => $essays));
snippet('global.cta');

snippet('global.footer');
