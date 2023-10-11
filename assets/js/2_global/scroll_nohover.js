// disable hover interactions while scrolling. http://www.thecssninja.com/css/pointer-events-60fps

$(document).ready(function(){

  var body = document.body,
    timer;

  window.addEventListener('scroll', function() {
    clearTimeout(timer);
    if(!body.classList.contains('disable-hover')) {
      body.classList.add('disable-hover')
    }

    timer = setTimeout(function(){
      body.classList.remove('disable-hover')
    },35);
  }, false);

});
