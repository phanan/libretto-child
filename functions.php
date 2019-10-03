<?php

wp_dequeue_style('libretto-fonts');

add_action('wp_enqueue_scripts', static function (): void {
    wp_enqueue_style('libretto-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('child-style',
        get_stylesheet_directory_uri() . '/style.css',
        ['libretto-style'],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style('libretto-fonts', 'https://fonts.googleapis.com/css?family=Literata:400,400i,600,600i|Playfair+Display|Playfair+Display+SC&display=swap&subset=vietnamese');
});

