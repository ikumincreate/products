<?php
add_theme_support('post-thumbnails');

function theme_style()
{
    wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'theme_style');