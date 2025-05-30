<?php

function boilerplate_load_assets() {
    wp_enqueue_script('ourmainjs', get_theme_file_uri('/src/index.js'), array('wp-element'), '1.0', true);
    wp_enqueue_script('flowbite', get_theme_file_uri('/src/js/flowbite.min.js'), array(), '2.3.0', true);
    wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));

    wp_localize_script('ourmainjs', 'ourData', array('root_url' => get_site_url()));
}
add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'boilerplate_add_support');

// Register translatable strings for Polylang
if (function_exists('pll_register_string')) {
    pll_register_string('Read More Button Label', 'Read more', 'Theme Strings');
    pll_register_string('Back to Blog Button Label', '← Back to Blog', 'Theme Strings');
    pll_register_string('Join Now Button Label', 'Join Now', 'Theme Strings');
    pll_register_string('No Items Found Message', 'No items found.', 'Theme Strings');
    pll_register_string('404_label', 'Page not found', 'Theme Strings');
    pll_register_string('404_message', 'Sorry, we couldn’t find the page you’re looking for.', 'Theme Strings');
    pll_register_string('404_button', 'Go back home', 'Theme Strings');
}
