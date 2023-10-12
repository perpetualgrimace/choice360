<?php



return function($site, $pages, $page) {

  $form = uniform('contactform', array(
      'required' => array(
        'name' => '',
        'email' => 'email',
        'text' => ''
      ),
      'actions'  => array(
        array(
          '_action' => 'email',
          'to'      => $page->email(),
          'sender'  => 'name',
          'jobtitle' => '',
          'institution' => '',
          'city' => '',
          'state' => '',
          'subject' => 'New message from the choice360.org contact form'
        )
      )
    )
  );

  return compact('form');
};
