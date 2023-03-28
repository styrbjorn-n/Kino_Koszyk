<?php

add_action('after_setup_theme', function () {
  add_theme_support('menus');
});

//I made a lil' function to tidy up the header. Shout if you want it gone.
function print_menu_items($menu)
{
  if ($menu) {
    foreach ($menu as $item) {
      echo "<a title='$item->title' href='$item->url'>$item->title</a>";
    }
  }
};


function register_theme_menus()
{
  register_nav_menus(array(
    'primary-menu' => __('Primary Menu'),
    'kino-menu' => __('Kino Menu'),
    'joanna-menu' => __('Joanna Menu'),
    'footer-menu' => __('Footer Menu')
  ));
}

add_action('init', 'register_theme_menus');

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

function print_a($data)
{
?>
  <pre class="block p-6 m-6 border border-brown rounded-xl text-xs overflow-hidden"><code><?php print_r($data); ?></code></pre>
<?php

}

function load_js()
{
  wp_enqueue_script('burger-script', './wp-content/themes/kinokoszyk/burger-script.js');
}
add_action('wp_enqueue_scripts', 'load_js');


