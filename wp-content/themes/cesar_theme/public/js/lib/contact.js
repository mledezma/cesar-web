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

  $('.price').val(price);
  $('.package').val(service);
}

contact.init = function() {
  if ($('form').length) {
    this.setParams();
  }
};

module.exports = contact;
