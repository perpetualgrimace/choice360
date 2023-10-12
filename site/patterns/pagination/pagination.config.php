<?php

return [
  'defaults' => [
    'collection' => function() {
      return site()->homePage()->children()->published()->flip()->paginate(10);
    },
    'pagination' => function() {
      return site()->homePage()->children()->published()->flip()->paginate(10)->pagination();
    }
  ]
];
