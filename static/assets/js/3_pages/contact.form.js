$(document).ready(function(){

  // switch email type to 'text' and remove 'required' attribute, so we can do our own validation when js is loaded
  $('#contactform-email').attr('type', 'text');
  $('.is-required').removeAttr('required');

  // form config
  $('.contactform').on('submit', function(e) {

    // re-hide error messages on submit
    $('.is-error').hide();

    // validation
    var name  = $('#contactform-name').val();
    var email = $('#contactform-email').val();
    var text  = $('#contactform-text').val();

    if (name === '') {
      $('.js-error--name').show();
      $('#contactform-name').focus();
      return false;
    }
    if (email === '') {
      $('.js-error--email').show();
      $('#contactform-email').focus();
      return false;
    }
    if(IsEmail(email) === false) {
      e.preventDefault();
      $('.js-error--email_invalid').show();
      $('#contactform-email').focus();
      return false;
    }

    function IsEmail(email) {
      var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if(!regex.test(email)) {
        return false;
      } else {
        return true;
      }
    }

    if (text === '') {
      $('.js-error--text').show();
      $('#contactform-text').focus();
      return false;
    }

    // submission
    /*

    e.preventDefault();
    var formData = $(this).serialize();

    $.post($(this).attr("action"), formData)
    .done(function(data) {
      $("#contactform").hide();
      $(".message-success").show("slow");
    })
    .fail(function(err) {
      $("#contactform").hide();
      $(".message-fail").show("slow");
    })

    */

  });
});
