/* global DBG */
'use strict';

/*
 * Blobal
 */
window.DBG = (typeof DBG === 'undefined') ? true : DBG;

/*
 * Var
 */
var $ = require('jquery');
var UI = require('./ui');
var Bumeran = require('./Bumeran');

/*
 * Require
 */
require('console');
/*
* Ready
*/
$(document).ready(function () {
  if (DBG) console.log('Ready!');
  if (DBG) console.log('common');

  // Call ctrl
  Bumeran.init();
});
