$(document).ready(function(){
  $('.slider').slick({
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    autoplaySpeed: 830
  });

  $('.slider-news').slick({
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 830
  });

  $('.slider-student-one-photo').slick({
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    centerMode: true
  });

  var width = $('img', '.slider').width();
  $('img', '.slider').height(width);

  var widthN =  parseInt(($('img', '.slider-news').width() / 100)*70);
  $('img', '.slider-news').height(widthN);

  var widthStudents =  parseInt(($('img', '.slider-student-one-photo').width() / 100)*30);
  $('img', '.slider-student-one-photo').height(widthStudents);
});

function res(){
  var imgAutoSize = $('img', '.slider').width();
    $('img', '.slider').height(imgAutoSize);
} res();
 
$( wiimgAutoSizendow ).resize(function() {
   res();
});