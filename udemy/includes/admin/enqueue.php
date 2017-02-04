<?php


function lsu_admin_enqueue() {
    if (!isset($_GET['page']) || $_GET['page'] != "lsu_theme_opts") {
        return;
    }

    wp_register_style('lsu_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('lsu_bootstrap');

    wp_register_script('lsu_options', get_template_directory_uri() . '/assets/js/options.js', array(), false, true);
    wp_enqueue_script('lsu_options');
}
