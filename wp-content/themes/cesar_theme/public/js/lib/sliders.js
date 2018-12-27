/* global  ga */
'use strict';

var slick = require('./slick');

//Lib
var $ = require('jquery');
window.jQuery = $;

var Slider = {};

Slider.init = function () {
  slick.init($('.slider-steps'), {
    swipeToSlide: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    infinite: true,
  });

  $('.slider-steps__prev').on('click', function() {
    $('.slider-steps').slick('slickPrev');
  });

  $('.slider-steps__next').on('click', function() {
    $('.slider-steps').slick('slickNext');
  });
};

module.exports = Slider;
