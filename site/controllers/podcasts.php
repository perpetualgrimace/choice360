<?

return function($site, $pages, $page) {

  $query   = get('q');

  if($query != '') {

    $results = page('librarianship/podcast')->search($query, 'title|text|byline|references|category|footnote|description|hashtag|author');
    $results = $results->visible()->sortBy('date');

    return array(
      'query'      => $query,
      'results'    => $results
    );
  };
};
