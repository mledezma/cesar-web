/* global  ga */
'use strict';

var slick = require('./slick');

//Lib
var $ = require('jquery');
window.jQuery = $;

var Slider = {};

Slider.init = function () {
  slick.init($('.slider-aliados'), {
    swipeToSlide: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    mobileFirst: true,
    infinite: true,
    prevArrow: '<button type="button" class="slider-aliados__prev"></button>',
    nextArrow: '<button type="button" class="slider-aliados__next"></button>',
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      }
    ]
  })

  slick.init($('.slider-lg-aliados'), {
    arrows: false,
    swipeToSlide: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    infinite: true,
    prevArrow: '<button type="button" class="slider-aliados__prev"></button>',
    nextArrow: '<button type="button" class="slider-aliados__next"></button>',
  })

  $('.slider-lg-aliados').prepend('<button type="button" class="slider-aliados__prev" id="sliderAliadosPrev"></button>');
  $('.slider-lg-aliados').append('<button type="button" class="slider-aliados__next" id="sliderAliadosNext"></button>');

  $('#sliderAliadosNext').on('click', function() {
    $('.slider-lg-aliados').slick('slickNext');
  });

  $('#sliderAliadosPrev').on('click', function() {
    $('.slider-lg-aliados').slick('slickPrev');
  });
};

module.exports = Slider;
