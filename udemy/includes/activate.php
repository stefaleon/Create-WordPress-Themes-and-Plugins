<?php


function lsu_activate () {
    if ( version_compare (get_bloginfo('version'), '4.2', '<') ) {
        wp_die(__('Minimum version required is 4.2'));
    }

    $theme_opts = get_option('lsu_opts');

    if (!theme_opts) {
        $opts = array(
            'facebook' => '',
            'twitter' => '',
            'youtube' => '',
            'logo-type' => 1,
            'logo-img' => '',
            'footer' => ''
        );
    }

    add_option('lsu_opts', $opts);

}
