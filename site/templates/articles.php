<?php

$blogs   = $page->siblings()->published();

$articles = $blogs->filterBy('template', 'article');

if($category = param('category')) {
  $articles = $articles->filterBy('category', $category, ',');
}

$categories = $blogs->filterBy('template', 'article')->pluck('category', ',', true);

snippet('global.head');
snippet('global.menu');

snippet('global.header.condensed');

snippet('blogs.articles.nav', array('categories' => $categories));
snippet('blogs.list', array('articles' => $articles, 'layout' => ''));
// snippet('global.cta');

snippet('global.footer');
