"use strict";

$(document).ready(function () {
  $('.slider').slick({
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1
  });
  $('.slider-news').slick({
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1
  });
  var width = $('img', '.slider').width();
  $('img', '.slider').height(width);
  var widthN = parseInt($('img', '.slider-news').width() / 100 * 70);
  $('img', '.slider-news').height(widthN);
});

function res() {
  var imgAutoSize = $('img', '.slider').width();
  $('img', '.slider').height(imgAutoSize);
}

res();
$(wiimgAutoSizendow).resize(function () {
  res();
});