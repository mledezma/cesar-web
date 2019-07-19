/* global  ga */
'use strict';

// ===============================
// Autor: Jimmy
// ===============================
var LazyLoad = require('vanilla-lazyload');
// var clamp = require('clamp-js');
const $ = window.jQuery = require('jquery');

//Lib
// var $ = require('jquery');
// window.jQuery = $;

var myLazyLoad;
var UI = {};

UI.init = function init () {
  console.log('UI');
};

UI.trackGA = function () {
  if (typeof ga !== 'undefined') {
    ga('send', 'pageview');
  }
};

UI.tracking = function(event, value){
	if (typeof dataLayer !== 'undefined') {
		dataLayer.push({
			'event': event,
			'formName': value.replace(/ /gi, '-').toLowerCase()
		});
	}
};

UI.search = function (name) {
  name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]'); // eslint-disable-line
  var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
  var results = regex.exec(window.location.search);
  return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
};

UI.lazyImg = function () {
  myLazyLoad = new LazyLoad({
    elements_selector: '.lazy'
  });
};

UI.lazyImgUpdate = function () {
  myLazyLoad.update();
};

// UI.clamp = function(element, lines) {
//   if (element.length > 1) {
//     element.each(function (idx, el) {
//       clamp(el, {clamp: lines});
//     });
//   } else if(element.length > 0){
//     clamp(element[0], {clamp: lines});
//   }
// }

module.exports = UI;
