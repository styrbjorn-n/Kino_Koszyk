<<<<<<< Updated upstream
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
=======
<?php 

add_action('after_setup_theme', function () {
  add_theme_support('menus');
});

function register_theme_menus() {
  register_nav_menus(array(
    'primary-menu' => __('Primary Menu'),
    'footer-menu' => __('Footer Menu'),
));
}
>>>>>>> Stashed changes
