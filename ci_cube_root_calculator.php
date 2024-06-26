<?php
/*
Plugin Name: CI Cube root calculator
Plugin URI: https://www.calculator.io/cube-root-calculator/
Description: Cube root calculator finds the principal (real) cube root of positive and negative numbers and the imaginary cube roots of the given number.
Version: 1.0.0
Author: Cube Root Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_cube_root_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Cube Root Calculator by www.calculator.io";

function display_calcio_ci_cube_root_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Cube Root Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_cube_root_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_cube_root_calculator', 'display_calcio_ci_cube_root_calculator' );