<?php

$blogs = $page->children()->published();

$articles = $blogs->filterBy('template', 'article');
// $events = $blogs->filterBy('template', 'event')->sortBy('date')->filterBy('date', '>', time());
$events = $blogs->filterBy('template', 'event')->sortBy('date', 'desc');
$releases = $blogs->filterBy('template', 'release')->sortBy('date', 'desc')->limit(3);

$categories = $articles->pluck('category', ',', true);

snippet('global.head');
snippet('global.menu');

snippet('global.header');

snippet('blogs.events-releases', array('events' => $events, 'releases' => $releases));
snippet('blogs.list', array('articles' => $articles));
snippet('blogs.sidebar', array('categories' => $categories));
snippet('blogs.cta');

snippet('global.footer');
