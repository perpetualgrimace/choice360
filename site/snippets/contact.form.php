<form class="contactform" id="contactform" action="<?= $page->url()?>" method="post">


  <div class="columns">

    <div class="column g-6">
      <label for="contactform-name"><span><?= $page->label_name() ?></span></label>
      <input name="name" class="is-required" type="text" id="contactform-name" required autofocus>
      <label class="is-error js-error--name" style="display: none;" for="contactform-name"><?= $page->error_name() ?></label>
    </div>

    <div class="column g-6">
      <label for="contactform-email"><span><?= $page->label_email() ?></span></label>
      <input name="email" class="is-required" type="email" id="contactform-email" inputmode="email" required>
        <label class="is-error js-error--email" style="display: none;" for="contactform-email"><?= $page->error_email() ?></label>
        <label class="is-error js-error--email_invalid" style="display: none;" for="contactform-email"><?= $page->error_email_invalid() ?></label>
    </div>

  </div>


  <div class="columns">

    <div class="column">
      <label for="contactform-text"><span><?= $page->label_text() ?></span></label>
      <textarea name="text" class="is-required" id="contactform-text" required></textarea>
        <label class="is-error js-error--text" style="display: none;" for="contactform-text"><?= $page->error_text() ?></label>
    </div>

  </div>


  <div class="columns">

    <div class="column g-3">
      <label for="contactform-jobtitle"><span><?= $page->label_title() ?></span></label>
      <input name="jobtitle" type="jobtitle" id="contactform-jobtitle">
    </div>

    <div class="column g-3">
      <label for="contactform-institution"><span><?= $page->label_institution() ?></span></label>
      <input name="institution" type="institution" id="contactform-institution">
    </div>

    <div class="column g-4">
      <label for="contactform-city"><span><?= $page->label_city() ?></span></label>
      <input name="city" type="city" id="contactform-city">
    </div>

    <div class="column g-2">
      <label for="contactform-state"><span><?= $page->label_state() ?></span></label>
      <input name="state" type="state" id="contactform-state">
    </div>

  </div>

  <label class="uniform__potty" for="website" style="display: none;">Please leave this field blank</label>
  <input type="text" name="website" id="website" class="uniform__potty" style="display: none;">

  <div class="columns">
    <div class="column">
      <button name="_submit" class="button button--fullwidth" type="submit" value="<?php //= $form->token() ?>"<?php // e($form->successful(), ' disabled')?>><?= $page->submit() ?></button>
    </div>
  </div>

</form>
