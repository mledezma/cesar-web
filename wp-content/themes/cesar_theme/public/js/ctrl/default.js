/* global DBG  */
'use strict';

var $ = require('jquery');
var sliders = require('../lib/sliders');
var UI = require('../UI');
var nav = require('../lib/nav');

module.exports = function () {
  sliders.init();
  UI.lazyImg();
  nav.init();
};
