<?php
/*
	Plugin Name: Advanced Custom Fields: Button
	Plugin URI: https://github.com/envex/acf-button-field
	Description: Creates a set of button fields for the Advanced Custom Fields plugin
	Version: 1.0.0
	Author: Matt Cromwell
	Author URI: http://mattcromwell.com
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/


class acf_field_button_plugin
{
	/*
	*  Construct
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function __construct()
	{
		// version 4+
		add_action('acf/register_fields', array($this, 'register_fields'));	

	}
	
	/*
	*  register_fields
	*
	*  @description: 
	*  @since: 3.6
	*  @created: 1/04/13
	*/
	
	function register_fields()
	{
		include_once('button-v4.php');
	}
	
}

new acf_field_button_plugin();