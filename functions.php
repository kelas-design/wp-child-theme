<?php
/**
 * Run enqueue WordPress
 */
function child_script_and_style()
{
    wp_enqueue_style('bs-child', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', [], false, 'all');

    wp_enqueue_script('js-child', get_stylesheet_directory_uri() . '/assets/script.js', [], false, [
        'strategy' => 'defer',
    ]);
}

add_action('wp_enqueue_scripts', 'child_script_and_style');
