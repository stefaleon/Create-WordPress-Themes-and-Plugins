<?php


function lsu_admin_menus () {
    add_menu_page(
        'Udemy Theme Options',
        'Theme Options',
        'edit_theme_options',
        'lsu_theme_opts',
        'lsu_theme_opts_page'
    );
}
