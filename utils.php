<?php
/**
 * @package     VikAsaasPay
 * @subpackage  core
 * @author      E4J s.r.l.
 * @copyright   Copyright (C) 2023.
 * @license     GNU General Public License version 2 or later; see LICENSE
 * @link        https://vikwp.com
 */

// No direct access
defined('ABSPATH') or die('No script kiddies please!');

// Define plugin base path
define('VIKASAASPAY_DIR', dirname(__FILE__));
// Define plugin base URI
define('VIKASAASPAY_URI', plugin_dir_url(__FILE__));

/**
 * Imports the file of the gateway and returns the classname
 * of the file that will be instantiated by the caller.
 *
 * @param 	string 	$plugin  The name of the caller.
 *
 * @return 	mixed 	The classname of the payment if exists, otherwise false.
 */
function vikasaaspay_load_payment($plugin)
{
	if (!JLoader::import("{$plugin}.asaaspay", VIKASAASPAY_DIR))
	{
		// there is not a version available for the given plugin
		return false;
	}

	return ucwords($plugin) . 'AsaasPayPayment';
}

/**
 * Returns the path in which the payment is located.
 *
 * @param 	string 	$plugin  The name of the caller.
 *
 * @return 	mixed 	The path if exists, otherwise false.
 */
function vikasaaspay_get_payment_path($plugin)
{
	$path = VIKASAASPAY_DIR . DIRECTORY_SEPARATOR . $plugin . DIRECTORY_SEPARATOR . 'asaaspay.php';

	if (!is_file($path))
	{
		// there is not a version available for the given plugin
		return false;
	}

	return $path;
}