<?php
/*
Plugin Name: Task Book
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Adding custom Post type of Task
Version:     1.0
Author:      WordPress.org
Author URI:  Javeed Ishaq
Text Domain: taskbook
Domain Path: /languages
License:     GPL3

Task Book is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Task Book is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Task Book. If not, see https://www.gnu.org/licenses/gpl-3.0.en.html.
*/


/**
* Register Task post Type
*/
require_once plugin_dir_path( __FILE__ ).'includes/posttypes.php';
register_activation_hook( __FILE__, 'taslbook_rewrite_flush' );

/**
* Register Task Logger user Role
*/
require_once plugin_dir_path( __FILE__ ).'includes/roles.php';
register_activation_hook( __FILE__, 'taslbook_register_role' );
