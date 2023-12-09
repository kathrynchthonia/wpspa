<?php
function theme_setup() {
    // Add theme support, register menus, etc.
}
add_action('after_setup_theme', 'theme_setup');

function enqueue_scripts() {
    // Enqueue scripts and styles
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');
