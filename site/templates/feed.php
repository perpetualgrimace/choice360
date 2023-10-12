<?php

  $blogs = $pages->find('blog')->children()->published()->sortBy('date')->limit(10);
  $libs  = $pages->find('librarianship')->grandChildren()->published()->sortBy('date')->limit(10);

  $items = new Pages(array($blogs, $libs));
  $items = $items->sortBy('date')->limit(10);

  snippet('feed', array(
    'link'  => url(''),
    'items' => $items,
    'descriptionField'  => 'description',
    'descriptionLength' => 150
  ));
