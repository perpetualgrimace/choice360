// add hover style to card when caption is focused
$(document).ready(function() {

  $('.caption').focus(function() {
    $(this).closest('.card').addClass('is-focused');
  });
  $('.caption').blur(function() {
    $(this).closest('.card').removeClass('is-focused');
  });

});
