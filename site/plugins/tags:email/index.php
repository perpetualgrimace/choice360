<?php

Kirby::plugin('perpetualgrimace/email', [
  'tags' => [
    'email' => [
      'attr' => ['text'],
      'html' => function($tag) {
        $email   = $tag->attr('email');
        $text    = $tag->attr('text', $email);

        return '<a href="mailto:'.$email.'">'.$text.'</a>';
      }
    ]
  ]
]);