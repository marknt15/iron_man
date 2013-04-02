<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');



/*
|--------------------------------------------------------------------------
| Custom Constants for REMAPS
|--------------------------------------------------------------------------
|
*/
define('SITE_NAME', 'REMAPS');
define('REMAPS_DESCRIPTION', 'REMAPS is a client reporting, client relationship management(CRM) and project management tool.');

define('FULL_COMPANY_NAME', 'Reload Media');
define('CSS_MAIN', 'css/main.css');

//define('CSS_MENU', 'css/menu.css');

define('CSS_ROUNDED_CORNER', 'css/rounded-corner.css');
//define('CSS_ROUNDED_CORNER', 'css/rounded-corner2.css');
//define('CSS_ROUNDED_CORNER', 'css/rounded-corner3.css');

define('CSS_NIVO_DEFAULT_THEME', 'css/nivo/themes/default/default.css');
define('CSS_NIVO', 'css/nivo/nivo-slider.css');

//define('CSS_JQUERY_UI_ALL', 'css/jquery_ui/themes/cupertino/jquery.ui.all.css');

//define('JS_JQUERY_1_6_1', 'js/jquery-1.6.1.min.js');
//define('JS_JQUERY_1_4_2', 'js/jquery-1.4.2.min.js');

//define('JS_NIVO', 'js/nivo/jquery.nivo.slider.pack.js');
define('JS_CURVY', 'js/jquery_curvy/jquery.curvycorners.packed.js');

//define('JS_JQUERY_UI_CORE', 'js/jquery_ui/ui/jquery.ui.core.js');

define('SITE_ICON', 'img/site-icon.png');
//define('URL_BLOG', 'http://blog.triptogotours.com');

/*
A client reporting tool, where clients can login to see how their digital marketing is performing
A client relationship management (CRM) tool, where we can keep contact details and other important info relating to our clients
A project management tool, where important dates and project milestones are kept and updated.
*/

/* End of file constants.php */
/* Location: ./application/config/constants.php */