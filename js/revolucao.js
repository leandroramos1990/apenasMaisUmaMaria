jQuery(document).ready(function($){
  $("ul.navbar-nav .revolucao").addClass('active');

  var audio = $('.audio').find('audio');
  audio = audio[0];

  setTimeout(function(){
    console.log(audio);
    //audio.play();
  }, 2000);

});
