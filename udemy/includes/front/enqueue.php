<?php

function lsu_enqueue() {
    wp_register_style('lsu_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style('lsu_siastyle', get_template_directory_uri() . '/assets/css/siastyle.css');
    wp_register_style('lsu_fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css');

    wp_enqueue_style('lsu_bootstrap');
    wp_enqueue_style('lsu_siastyle');
    wp_enqueue_style('lsu_fontawesome');

    wp_register_script('lsu_bootstrap', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array(), false, true);
    wp_register_script('lsu_smoothscroll', get_template_directory_uri() . '/assets/js/smoothscroll.js', array(), false, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('lsu_bootstrap');
    wp_enqueue_script('lsu_smoothscroll');

}
