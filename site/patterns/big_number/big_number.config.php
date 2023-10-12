<?php

return [
  'defaults' => [
    'number' => function() {
      return page('home')->Choice_reviews_col1_num();
    },
    'label' => function() {
      return page('home')->Choice_reviews_col1_label();
    }
  ]
];
