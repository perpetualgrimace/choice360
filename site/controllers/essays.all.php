<?php

return function($site, $pages, $page) {

  $query   = get('q');

  if($query != '') {

    $results = page('librarianship/essays')->search($query, 'title|text|description|byline|issue');
    $results = $results->published()->sortBy('date');

    return array(
      'query'      => $query,
      'results'    => $results
    );
  };
};
