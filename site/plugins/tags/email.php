<?php

kirbytext::$tags['email'] = array(
  'attr' => array(
    'text',
    'subject'    
  ),
  'html' => function($tag) {

    $email   = $tag->attr('email');
    $text    = $tag->attr('text', $email);
    $subject = rawurlencode($tag->attr('subject',null));
    $query   = ($subject) ? '?subject='.$subject : null;

    return '<a href="mailto:'.$email.$query.'">'.$text.'</a>';

  }
);