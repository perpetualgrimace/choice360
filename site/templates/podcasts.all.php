<?php

$podcasts = $pages->find('librarianship/podcast')->children()->published()->sortBy('date');

$categories = $podcasts->filterBy('date', '<', time())->pluck('category', ',', true);

snippet('global.head');
snippet('global.menu');

snippet('global.header.condensed');

snippet('podcasts.all.nav', array('podcasts' => $podcasts, 'categories' => $categories));
snippet('podcasts.list', array('podcasts' => $podcasts));
snippet('global.cta');

snippet('global.footer');