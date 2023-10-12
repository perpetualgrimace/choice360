<?php

function tagcloud($parent, $options=array()) {

  global $site;

  // default values
  $defaults = array(
    'limit'    => false,
    'field'    => 'tags',
    'children' => 'published',
    'baseurl'  => $parent->url(),
    'param'    => 'tag',
    'sort'     => 'results',
    'sortdir'  => 'desc'
  );

  // merge defaults and options
  $options = array_merge($defaults, $options);

  switch($options['children']) {
    case 'unlisted':
      $children = $parent->children()->unlisted();
      break;
    case 'published':
      $children = $parent->children()->published();
      break;
    default:
      $children = $parent->children();
      break;
  }

  $cloud = array();
  $ds    = DIRECTORY_SEPARATOR == '/' ? ':' : ';';

  foreach($children as $p) {

    $tags = str::split($p->$options['field']());

    foreach($tags as $t) {

      if(isset($cloud[$t])) {
        $cloud[$t]->results++;
      } else {
        $cloud[$t] = new obj(array(
          'results'  => 1,
          'name'     => $t,
          'url'      => $options['baseurl'] . '/' . $options['param'] . $ds . $t,
          'isActive' => (param($options['param']) == $t) ? true : false,
        ));
      }

    }

  }

  $cloud = a::sort($cloud, $options['sort'], $options['sortdir']);

  if($options['limit']) {
    $cloud = array_slice($cloud, 0, $options['limit']);
  }

  return $cloud;

}