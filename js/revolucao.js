jQuery(document).ready(function($){

  var audio = $('.audio').find('audio');
  audio = audio[0];

  setTimeout(function(){
    console.log(audio);
    audio.play();
  }, 2000);

});
