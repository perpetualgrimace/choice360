// custom responsive nav
$(document).ready(function() {

  // toggle
  $('.js-nav_toggle').click(function() {
    $('.js-nav_hamburger').toggleClass('is-inactive is-active');
    $('.js-nav__main').toggleClass('is-collapsed is-expanded');
  });

  // add keyboard focus for dropdown items
  $('.nav_dropdown__list a').focus(function() {
    $(this).closest('.nav_dropdown__list').addClass('is-focused');
  });
  $('.nav_dropdown__list a').blur(function() {
    $(this).closest('.nav_dropdown__list').removeClass('is-focused');
  });

});
