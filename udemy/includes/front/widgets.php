<?php


function lsu_widgets () {
    register_sidebar(array(
        'name'      => __('lsu-Sidebar', 'udemy'),
        'id' => 'lsu_sidebar_id',
        'description' => __('A Sidebar for the udemy theme', 'udemy'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => "</div>",
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => "</h2>"
    ));


}
