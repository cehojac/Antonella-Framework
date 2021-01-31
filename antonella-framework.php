<?php

namespace CH;

/*
Plugin Name: Antonella Framework
Plugin URI:
Description:Another plugin developed on Antonella Framework for WP
Version: 1.7
Author: Carlos Herrera
Author URI:
Framework: Antonella Framework for WP
Framework URI: http://antonellaframework.com
License: GPL2+
Text Domain: anto
Domain Path: /languages
*/

defined('ABSPATH') or die(__("I'm sorry, you can't go through here :)"));

/*
* Class Caller.
* cuando una clase es llamada hace un include
* al archivo con su mismo nombre
* se respeta mayusculas y minusculas
*
* @return null
*/
define('NELLA_URL', __FILE__);
$loader = require __DIR__.'/vendor/autoload.php';
$antonella = new Start();
