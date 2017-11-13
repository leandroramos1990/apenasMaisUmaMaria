jQuery(document).ready(function($){

  var video = $('.video').find('video');
  video = video[0];

  setTimeout(function(){
    console.log(video);
    video.play();
  }, 1000);


  $("#open").click(function(){
    window.open("http://oresgatedasmemoriasdemaria.com.br/perfil.php",'_self');
  });

  video.addEventListener('ended',function(){
    window.open("http://oresgatedasmemoriasdemaria.com.br/perfil.php",'_self');
  }, false);

});
