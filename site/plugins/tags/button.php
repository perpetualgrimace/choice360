<?php

kirbytext::$tags['button'] = array(
  'attr' => array(
    'text', 'link'
  ),
  'html' => function($tag) {

    $text = $tag->attr('button', 'button: buttontext');
    $link = $tag->attr('link', 'about');

    return '<a href="' . $link . '" class="button">' . $text . '</a>';

  }
);
