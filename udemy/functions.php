<?php

// Set up
add_theme_support('menus');
add_theme_support('post_thumbnails');
add_theme_support('title-tag');

// includes
include(get_template_directory() . '/includes/front/enqueue.php');
include(get_template_directory() . '/includes/setup.php');
include(get_template_directory() . '/includes/front/widgets.php');
include(get_template_directory() . '/includes/activate.php');
include(get_template_directory() . '/includes/admin/menus.php');
include(get_template_directory() . '/includes/admin/options-page.php');

// Action & Filter hooks
add_action('wp_enqueue_scripts', 'lsu_enqueue');
add_action('after_setup_theme', 'lsu_setup_theme');
add_action('widgets_init', 'lsu_widgets');
add_action('after_switch_theme', 'lsu_activate');
add_action('admin_menu', 'lsu_admin_menus');

// Shortcodes
