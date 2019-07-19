<?php
/*
 *  Author: Jimmy Guevara
 *  URL: Jimmyguevara.com
 *  Varaibles, Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
  CONFIG
\*------------------------------------*/
require_once('lib/config.php');

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

require_once('lib/themeSupport.php');

/*------------------------------------*\
	scripts
\*------------------------------------*/

require_once('lib/scripts.php');
require_once('lib/bumeran.php');

/*------------------------------------*\
  Menu
\*------------------------------------*/

require_once('lib/menus.php');

/*------------------------------------*\
  External Modules/Files
\*------------------------------------*/

require_once('lib/comentarios.php');
require_once('lib/extras.php');
// require_once('lib/sidebars.php');

/*------------------------------------*\
  Custom Post Types, ShortCode Functions
\*------------------------------------*/
require_once('lib/shortCodes.php');
require_once('lib/customTypePost.php');

/*------------------------------------*\
	AJAX
\*------------------------------------*/
require_once('lib/email.php');


/*------------------------------------*\
	Init
\*------------------------------------*/

require_once('lib/init.php');

?>
