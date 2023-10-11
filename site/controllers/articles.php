<?

return function($site, $pages, $page) {

  $query   = get('q');

  if($query != '') {

    $results = page('blog')->search($query, 'title|text|byline|references|footnote|description|hashtag|author');
    $results = $results->visible()->filterBy('template', 'article')->sortBy('date');

    return array(
      'query'      => $query,
      'results'    => $results
    );
  };
};
