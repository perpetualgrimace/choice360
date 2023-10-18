<?php

Kirby::plugin('perpetualgrimace/button', [
  'tags' => [
    'button' => [
      'attr' => ['text', 'link', 'class'],
      'html' => function($tag) {
        $link = $tag->attr('link', 'https://google.com');
        $text = $tag->attr('button', 'button: buttontext');

        return '<a href="' . $link . '" class="button">' . $text . '</a>';
      }
    ]
  ]
]);