<?php

// https://getkirby.com/docs/cookbook/setup/migrate-site#frontend__accessing-arguments-from-the-router-in-controllers
return function($site, $pages, $page) {

  $query   = get('q');

  if($query != '') {

    $results = page('blog')->search($query, 'title|text|byline|references|footnote|description|hashtag|author');
    $results = $results->published()->filterBy('template', 'article')->sortBy('date');

    return array(
      'query'      => $query,
      'results'    => $results
    );
  };
};
