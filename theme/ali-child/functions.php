<?php
add_action('wp_enqueue_scripts', function () {
  $parent = wp_get_theme(get_template());
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css', [], $parent->get('Version'));
  $child = get_stylesheet_directory();
  wp_enqueue_style('ali-child', get_stylesheet_directory_uri() . '/dist/app.css', ['parent-style'], filemtime($child . '/dist/app.css'));
  wp_enqueue_script('ali-app', get_stylesheet_directory_uri() . '/dist/app.js', [], filemtime($child . '/dist/app.js'), true);
});

add_action('after_setup_theme', function () {
  register_nav_menus([
    'primary' => 'Primary Menu',
    'footer'  => 'Footer Menu',
  ]);
});
