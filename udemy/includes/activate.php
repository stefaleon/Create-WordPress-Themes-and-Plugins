<?php


function lsu_activate () {
    if ( version_compare (get_bloginfo('version'), '4.2', '<') ) {
        wp_die(__('Minimum version required is 4.2'));
    }
}
