// automatic smooth scrolling: https://css-tricks.com/snippets/jquery/smooth-scrolling/

$(document).ready(function(){

  $('a[href*=#]:not([href=#]):not(.js-nav_toggle)').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 800); // timing in ms
        return false;
      }
    }
  });

});
