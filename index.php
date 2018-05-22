<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */
if (file_exists('homepage.cache')) {
  echo file_get_contents('homepage.cache');
  exit;
}
/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);
ob_start();
/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
$html = ob_get_contents();
file_put_contents('homepage.cache',$html);
ob_end_flush();
