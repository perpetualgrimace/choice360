<?php

$podcasts = $pages->find('librarianship/podcast')->children()->published();

$categories = $podcasts->pluck('category', ',', true);

snippet('global.head');
snippet('global.menu');

snippet('global.header');

snippet('global.textblock');
snippet('podcasts.list', array('podcasts' => $podcasts));
snippet('podcasts.sidebar', array('categories' => $categories));
snippet('global.cta');

snippet('global.footer');
