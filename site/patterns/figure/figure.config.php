<?php

return [
  'defaults' => [
    'src' => function() {
      return page('home')->image('magazine_col1.png');
    },
    'caption' => function() {
      return page('home')->choice_magazine_col1();
    }
  ]
];
