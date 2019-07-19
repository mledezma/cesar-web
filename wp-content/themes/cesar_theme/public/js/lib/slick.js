'use strict';

var $ = require('jquery');
require('slick-carousel');

window.jQuery = $;

// tener un array de todos los carouseles
// luego para inicializarlos checkear si esta 'registrado'
// y si se encuentra en el DOM
var slickObj = {
  init (el, settings) {
    el.slick(settings || {});
  }
};
module.exports = slickObj;
