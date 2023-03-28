<?php

add_action('after_setup_theme', function () {
  add_theme_support('menus');
});

function load_tailwind()
{
  wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
  // Load tailwind.config.js after tailwind has been loaded
  wp_enqueue_script('tailwind-config', get_template_directory_uri() . '/tailwind.config.js', array('tailwind'), null, false);
}
add_action('wp_enqueue_scripts', 'load_tailwind');


function create_posttype()
{

  register_post_type(
    'movies',
    array(
      'labels' => array(
        'name' => __('Movies'),
        'singular_name' => __('Movie')
      ),
      'public' => true,
      'has_archive' => true,

    )
  );
}
add_action('init', 'create_posttype');
