jQuery('document').ready(function(){
  $("ul.navbar-nav .perfil").addClass('active');

  var audio = $('.audio').find('audio');
  audio = audio[0];
  audio.volume = 0.2;

  setTimeout(function(){
    console.log(audio);
    audio.play();
  }, 2000);
});
