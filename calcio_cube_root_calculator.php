<?php
/*
Plugin Name: Cube Root Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/cube-root-calculator/
Description: Use our free Cube Root Calculator to instantly find the real and imaginary cube roots of any positive or negative number. Fast, accurate, and easy to use!
Version: 1.0.0
Author: www.calculator.io / Cube Root Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_cube_root_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Cube Root Calculator by www.calculator.io";

function calcio_cube_root_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Cube Root Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_cube_root_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_cube_root_calculator', 'calcio_cube_root_calculator_shortcode' );