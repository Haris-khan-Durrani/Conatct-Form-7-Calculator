<?php
/**
* Plugin Name: Calculator For Contact Form 7
* Description: This plugin allows calculation for contact form 7.
* Version: 1.1
* Copyright: 2024
* Text Domain: calculator-for-contact-form-7
* Domain Path: https://hariskhandurrani.com
*/


/* define absolutepath*/
if (!defined('ABSPATH')) {
   	die('-1');
}

/* define  plugin file name   */
define('CALCULATIONCF7_PLUGIN_FILE', __FILE__);

 /* define  plugin diretorypath  name   */
define('CALCULATIONCF7_PLUGIN_DIR',plugins_url('', __FILE__));


/* all Included file  */
include_once('main/backend/calculationcf7-calculator.php');
include_once('main/resources/calculationcf7-installation-require.php');     
include_once('main/resources/calculationcf7-load-js-css.php');     
include_once('main/resources/calculationcf7-language.php');     
