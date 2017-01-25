<?php

// Set up
add_theme_support('menus');

// includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');

// Action & Filter hooks
add_action('wp_enqueue_scripts', 'lsu_enqueue');
add_action('after_setup_theme', 'lsu_setup_theme');

// Shortcodes
