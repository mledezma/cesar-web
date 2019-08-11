/* global */
'use strict';

var $ = require('jquery');
var nav = {
  menu: $('.nav'),
  btn: $('.icon-hamburger__wrapper'),
  state: 'close'
};

nav.init = function() {
  var {btn, menu} = this;
  console.log(btn);
  
  btn.click(() => {
    if (this.state === 'close') {
      menu.addClass('open')
      btn.find('.icon-hamburger').addClass('animate')
      this.state = 'open';
    } else {
      menu.removeClass('open')
      btn.find('.icon-hamburger').removeClass('animate')
      this.state = 'close';
    }
  });
}

module.exports = nav;
