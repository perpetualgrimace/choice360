<?

return [
  'defaults' => [
    'collection' => function() {
      return site()->homePage()->children()->visible()->flip()->paginate(10);
    },
    'pagination' => function() {
      return site()->homePage()->children()->visible()->flip()->paginate(10)->pagination();
    }
  ]
];
