$(document).ready(function(){
  $('.slider').slick({
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true
  });

  $('.slider-news').slick({
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: false
  });

  $('.slider-student-one-photo').slick({
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        centerMode: true
  });
  
  $('.slider-five-photo').slick({
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        // centerMode: true,
        dots: true
  });

  var width = $('img', '.slider').width();
  $('img', '.slider').height(width);

  var widthN =  parseInt(($('img', '.slider-news').width() / 100)*70);
  $('img', '.slider-news').height(widthN);

  var widthStudents =  parseInt(($('img', '.slider-student-one-photo').width() / 100)*30);
  $('img', '.slider-student-one-photo').height(widthStudents);

  var widthFivePhoto = $('img', '.slider-five-photo').width() / 100 * 10;
  $('img', '.slider-five-photo').height(widthFivePhoto);
});

function res(){
  var imgAutoSize = $('img', '.slider').width();
    $('img', '.slider').height(imgAutoSize);
} res();
 
$( wiimgAutoSizendow ).resize(function() {
   res();
});