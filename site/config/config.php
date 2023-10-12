<?php

// All config options: https://getkirby.com/docs/reference/system/options
return [
  'debug' => true,
  'cache' => false,
  'markdown' => [
    'extra' => true
  ],
];

// c::set('license', 'K2-PRO-43d82b2a118a075f0faaec6dec24c415');

// // cache
// c::set('cache', false);
// //debug
// c::set('debug', true);

// // .md extension support
// c::set('content.file.extension', 'md');

// // smart quotes
// c::set('smartypants', true);

// // thumbnails
// c::set('thumbs.driver', 'gd');

// // languages
// c::set('languages', array(
//   array(
//     'code'    => 'en',
//     'name'    => 'English',
//     'locale'  => 'en_US',
//     'default' => true,
//     'url'     => '/'
//   )
// ));

// // routing
// c::set('routes', array(

//   // rss » feed
//   array(
//     'pattern' => 'rss',
//     'action'  => function() {
//       go('feed');
//     }
//   ),

//   // admin » panel
//   array(
//     'pattern' => ['admin', 'wp-admin'],
//     'action'  => function() {
//       go('panel');
//     }
//   ),

//   // components » patterns
//   array(
//     'pattern' => 'components',
//     'action'  => function() {
//       go('patterns');
//     }
//   ),

//   // articles vanity URL
//   array(
//     'pattern' => 'articles',
//     'action'  => function() {
//       go('blog/articles');
//     }
//   ),

//   // products vanity URLs
//   array(
//     'pattern' => ['reviews', 'choice-reviews', 'choice-reviews-online'],
//     'action'  => function() {
//       go('products/reviews');
//     }
//   ),
//   array(
//     'pattern' => ['magazine', 'choice-magazine'],
//     'action'  => function() {
//       go('products/magazine');
//     }
//   ),
//   array(
//     'pattern' => ['cards', 'croc', 'reviews-on-cards', 'choice-reviews-on-cards'],
//     'action'  => function() {
//       go('products/cards');
//     }
//   ),
//   array(
//     'pattern' => ['rcl', 'resources-for-college-libraries'],
//     'action'  => function() {
//       go('products/rcl');
//     }
//   ),
//   array(
//     'pattern' => ['acrl', 'acrl-books', 'books-and-resources'],
//     'action'  => function() {
//       go('products/acrl-resources');
//     }
//   ),
//   array(
//     'pattern' => ['trial', 'free-trial'],
//     'action'  => function() {
//       go('products/reviews/trial');
//     }
//   ),

//   // redirect old webinar link, set up vanity URL
//   array(
//     'pattern' => ['acrl-choice-webinars', 'webinars'],
//     'action' => function() {
//       go('librarianship/webinars');
//     }
//   ),

//   // librarianship vanity URLs
//   array(
//     'pattern' => 'essays',
//     'action' => function() {
//       go('librarianship/essays');
//     }
//   )
// ));

// // patterns
// c::set('patterns.preview.css', 'assets/build/css/main.css');
// c::set('patterns.preview.js', 'assets/build/js/main.js');
