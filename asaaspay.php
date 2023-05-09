<?php
/**
 * Plugin Name:     Asaas Gateway for VK Rent Items Plugin
 * Plugin URI:      https://www.aluguemala.com.br
 * Description:     Take transparent credit card and bank ticket payment checkouts on your store using Asaas.
 * Author:          Bruno Carvalho
 * Author URI:      https://www.aluguemala.com.br
 * Text Domain:     woo-asaas
 * Domain Path:     /languages
 * Version:         2.1.5
 *
 * @package         Asaas Vk Rent Itens
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

require_once 'woo-asaas/autoload.php';

add_action( 'plugins_loaded', array( \WC_Asaas\WC_Asaas::class, 'get_instance' ) );
