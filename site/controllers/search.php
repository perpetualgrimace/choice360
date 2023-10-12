<?php

return function($site, $pages, $page) {

  $query   = get('q');
  $results = $site->index()->published()->search($query, 'title|text|byline|references|footnote|description|hashtag|author');
  $results = $results->sortBy('depth');

  return array(
    'query'      => $query,
    'results'    => $results
  );

};
