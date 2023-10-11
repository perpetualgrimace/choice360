<?

return [
  'defaults' => [
    'src' => function() {
      return page('home')->images()->shuffle()->first();
    },
    'shadow' => TRUE,
    'link' => ''
  ]
];
