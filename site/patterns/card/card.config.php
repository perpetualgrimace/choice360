<?php

return [
  'defaults' => [
    'layout' => 'g-6',
    'item' => function() {
      return page('librarianship/webinars')->children()->shuffle()->first();
    },
  ]
];
