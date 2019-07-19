/* global DBG, googleCaptcha, dataLayer */
'use strict';

// ===============================
// Autor: Jimmy
// ===============================

/**
 * Validate form
 *
 * @param {form} classes  - .form.validate
 * @param {form} attibutes
 * 		action="email" (whitout word api /api/email)
 * 		data-cliente="nombre"
 *    data-ignoregrecaptcha="true" (ignora el validad qu no tiene captcha)
 *  	data-name="nombre" (contact, product....)
 * 		data-send="type" (administracion) solo para uso en el backend, el backend sabra a quien enviarselo
 *		data-showelem="elem" (elemento a mostar cuando finalice el envio) solo si es necesario
 *		data-hideelem="elem" (elemento a ocultas cuando finalice el envio) solo si es necesario
 *	@param {inputs, textares} classes - .form-elem .form-control
 *	@param {inputs, textares} attibutes
 *		name="precio-producto" (si tiene mas de una palabra separarla por medio de un -, cuando es envia al backend ya se le removio el - con la fn prepareDataToDataDump )
 *	@param {button[type="submit"]} attibutes - son para mostrar el texto cuando se esta enviano
 *     data-text-default="enviar"
 * 		 data-text-loading="enviando...."

*/

var $ = window.jQuery = require('jquery');
var helperForm = require('./form');
var ui = require('../ui');
var notify = require('./notify');
var validate = {};

//
// Validate Forms
//
validate.form = function ($form) {
  var $self = $form;
  helperForm.checkboxCheck($self);

  $self.submit(function (e) {
    e.preventDefault();

    var form = {
      elem: helperForm.elem($self),
      attibute: helperForm.attibute($self),
      fields: helperForm.fields($self),
      capthcha: helperForm.captchaResponse($self)
    };

    // Check validate captcha
    if (!form.capthcha) return false;

    // Block form and change state
    helperForm.block($self);
    helperForm.buttonState(form.elem.$btn, 'loading');

    // Prepare Data To DataDump
    var clientNameForm = form.attibute.client + '-' + form.attibute.name;
    form.dataString = helperForm.prepareDataToDataDump(clientNameForm, form.fields);

    // Check fields
    if (DBG) {
      console.table(form, 'Form Data');
    }

    // Send request
    $.post(jsforwp_globals.ajax_url, {
      action: 'jsforwp_send_email',
      fields: form.fields,
      name: form.attibute.name,
      _ajax_nonce: jsforwp_globals.nonce
    })
      .done(function (result) {

        // Send Data layer
        ui.tracking('formSubmitted', form.attibute.name);

        // Request data dump TODO separar
        $.ajax({
          type: 'POST',
          url: '//reymisterio.net/data-dump/?' + form.dataString
        })
          .done(function (response) {
            if (result && result.redirect) {
              window.location.href = result.redirect;
            } else {
              helperForm.clear($self);
              if (form.attibute.hideElem) $(form.attibute.hideElem).addClass('d-none');
              if (form.attibute.showElem) {
                $(form.attibute.showElem)
                  .removeClass('d-none');
                ui.goToAnchor(form.attibute.showElem);
              }
              notify.show();
              if (!form.capthcha) grecaptcha.reset();
            }
            if (DBG) console.log(response, 'response');
          });
      })
      .always(function () {
        helperForm.buttonState(form.elem.$btn, 'default');
        helperForm.release($self);
      })
      .fail(function (error) {
        console.log(error);
        notify.error();
      });

  });
};

//
// Validate forms
//
validate.forms = function () {
  $('.form.validate').each(function (index, elem) {
    var $self = $(elem);
    validate.form($self);
  });
};

module.exports = validate;
