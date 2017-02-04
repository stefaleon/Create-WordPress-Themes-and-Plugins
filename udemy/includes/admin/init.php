<?php


function lsu_admin_init() {
    include('enqueue.php');

    add_action('admin_enqueue_scripts', 'lsu_admin_enqueue');
}
