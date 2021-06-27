$(document).ready(function(){
  $('.slider').slick({
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2500,
    responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 1,
	      }
	    }
    ]
  });

  $('.slider-news').slick({
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2500
  });

  $('.slider-student').slick({
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2500
  });

  var width = $('img', '.slider').width();
  $('img', '.slider').height(width);

  var widthN =  parseInt(($('img', '.slider-news').width() / 100)*70);
  $('img', '.slider-news').height(widthN);

  var widthStudents = $('img', '.slider-student-one-photo').width();
  $('img', '.slider-student-one-photo').height(widthStudents);
});

function res(){
  var imgAutoSize = $('img', '.slider').width();
    $('img', '.slider').height(imgAutoSize);
} res();
 
$( wiimgAutoSizendow ).resize(function() {
   res();
});