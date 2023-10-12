<?php

return function($site, $pages, $page) {

  $query   = get('q');

  if($query != '') {

    $results = page('librarianship/webinars')->search($query, 'title|text|sponsor_name');
    $results = $results->published()->sortBy('date');

    return array(
      'query'      => $query,
      'results'    => $results
    );
  };
};
