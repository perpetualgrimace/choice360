<?php

$blogs = $page->children()->published();

$articles = $blogs->filterBy('template', 'article');
$events   = $blogs->filterBy('template', 'event')->sortby('date')->filterBy('date', '>', time());
$releases = $blogs->filterBy('template', 'release')->sortby('date', 'desc');

$categories = $articles->pluck('category', ',', true);

snippet('global.head');
snippet('global.menu');

snippet('global.header');

snippet('blogs.events-releases', array('events' => $events, 'releases' => $releases));
snippet('blogs.list', array('articles' => $articles));
snippet('blogs.sidebar', array('categories' => $categories));
snippet('blogs.cta');

snippet('global.footer');
