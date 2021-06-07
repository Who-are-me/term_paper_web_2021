$(document).ready(function(){
    $('.slider').slick({
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1

    });
        var width = $('img', '.slider').width();
          $('img', '.slider').height(width);
  });

  function res(){
    var imgAutoSize = $('img', '.slider').width();
      $('img', '.slider').height(imgAutoSize);
 } res();
 
 $( wiimgAutoSizendow ).resize(function() {
     res();
 });