'use strict';

var $ = require('jquery');

window.jQuery = $;

var contact = {
  params: []
};

contact.setParams = function() {
  var url = new URL(window.location.href );
  var price = url.searchParams.get('price');
  var service = url.searchParams.get('service');

  $('.price').attr('value', price);
  $('.package').attr('value', service);

  $('form').submit(function() {
    console.log($('form').serialize());
  });
}

contact.init = function() {
  if ($('form').length) {
    this.setParams();
  }
};

module.exports = contact;
