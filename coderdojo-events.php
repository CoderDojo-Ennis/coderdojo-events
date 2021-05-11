<?php
/**
 * Plugin Name: CoderDojo Events
 * Plugin URI: 
 * Description: Display events on your site
 * Version: 0.9.0
 * Author: Anthony Nolan
 * Author URI: 
 * License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Requires at least: 5.7
 * Tested up to: 5.7
 * Requires PHP: 7.0
 * Text Domain: coderdojo-kata
 * Domain path: /languages/
 */

/**
 * Copyright 2013-2020 Automattic
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Custom Meta Boxes */
require_once dirname( __FILE__ ) . '/includes/custom-meta-boxes.php';

/** Custom Post Types */
require_once dirname( __FILE__ ) . '/includes/custom-post-types.php';

?>