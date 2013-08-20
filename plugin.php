<?php
/**
 * Plugin Name: SimpleUpdater
 * Plugin URI: https://github.com/SimpleRain/SimpleUpdater
 * Description: A simple wordpress options framework for developers.
 * Version: 1.0.0
 * Author: SimpleRain
 * Author URI: http://simplerain.com
 *
 * This class will allow a developer to privately host a plugin on Github and roll updates
 * simply by creating a new release.
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 3, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @author    Dovy Paukstys <info@simplerain.com>
 * @copyright Copyright (c) 2013, SimpleRain
 * @link      http://simplerain.com/
 * @license   http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (file_exists( dirname( __FILE__ ) . '/SimpleUpdater.php') ) {
	include_once( dirname( __FILE__ ) . '/SimpleUpdater.php' );
  $Simple_Updater = new Simple_Updater( array( 
			'slug' 					=> __FILE__, 
			'force_update'	=> false,
		) );
}
