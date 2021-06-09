"use strict";

var mainSliderSelector = '.main-slider',
    navSliderSelector = '.nav-slider',
    interleaveOffset = 0.5; // Main Slider

var mainSliderOptions = {
  loop: true,
  speed: 1000,
  autoplay: {
    delay: 3000
  },
  loopAdditionalSlides: 10,
  grabCursor: true,
  watchSlidesProgress: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  },
  on: {
    init: function init() {
      this.autoplay.stop();
    },
    imagesReady: function imagesReady() {
      this.el.classList.remove('loading');
      this.autoplay.start();
    },
    slideChangeTransitionEnd: function slideChangeTransitionEnd() {
      var swiper = this,
          captions = swiper.el.querySelectorAll('.caption');

      for (var i = 0; i < captions.length; ++i) {
        captions[i].classList.remove('show');
      }

      swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
    },
    progress: function progress() {
      var swiper = this;

      for (var i = 0; i < swiper.slides.length; i++) {
        var slideProgress = swiper.slides[i].progress,
            innerOffset = swiper.width * interleaveOffset,
            innerTranslate = slideProgress * innerOffset;
        swiper.slides[i].querySelector(".slide-bgimg").style.transform = "translateX(" + innerTranslate + "px)";
      }
    },
    touchStart: function touchStart() {
      var swiper = this;

      for (var i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = "";
      }
    },
    setTransition: function setTransition(speed) {
      var swiper = this;

      for (var i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = speed + "ms";
        swiper.slides[i].querySelector(".slide-bgimg").style.transition = speed + "ms";
      }
    }
  }
};
var mainSlider = new Swiper(mainSliderSelector, mainSliderOptions); // Navigation Slider

var navSliderOptions = {
  loop: true,
  loopAdditionalSlides: 10,
  speed: 1000,
  spaceBetween: 5,
  slidesPerView: 5,
  centeredSlides: true,
  touchRatio: 0.2,
  slideToClickedSlide: true,
  direction: 'vertical',
  on: {
    imagesReady: function imagesReady() {
      this.el.classList.remove('loading');
    },
    click: function click() {
      mainSlider.autoplay.stop();
    }
  }
};
var navSlider = new Swiper(navSliderSelector, navSliderOptions); // Matching sliders

mainSlider.controller.control = navSlider;
navSlider.controller.control = mainSlider;