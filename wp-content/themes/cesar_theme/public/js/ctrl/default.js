/* global DBG  */
'use strict';

var $ = require('jquery');
var sliders = require('../lib/sliders');
var UI = require('../UI');

module.exports = function () {
  sliders.init();
  UI.lazyImg();
};
