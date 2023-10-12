<?php
  snippet('global.head');
  snippet('global.menu', ['depth' => 'u-front']);

  snippet('home.header');

  snippet('global.section', [
    'field' => 'intro',
    'alignment' => 'u-left--center',
    'layout' => 'g-10 g-center scale--lg'
  ]);

  snippet('home.reviews');
  snippet('global.section', [
    'field' => 'librarianship',
    'alignment' => 'u-left--center',
    'layout' => 'g-10 g-center scale--lg'
  ]);
  snippet('home.magazine');
  snippet('home.ccadvisor');
  snippet('home.rcl');
  snippet('home.blog');

  snippet('global.cta');

  snippet('global.footer');
?>