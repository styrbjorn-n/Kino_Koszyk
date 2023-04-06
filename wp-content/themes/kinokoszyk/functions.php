<?php

add_action('after_setup_theme', function () {
  add_theme_support('menus');
});
// Removes unneccessary default post types.
add_action('wp_dashboard_setup', 'remove_draft_widget', 999);

function remove_draft_widget()
{
  remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
}
//Remove from +New Post in Admin Bar
add_action('admin_bar_menu', 'remove_default_post_type_menu_bar', 999);

function remove_default_post_type_menu_bar($wp_admin_bar)
{
  $wp_admin_bar->remove_node('new-post');
}

//Remove from the Side Menu
add_action('admin_menu', 'remove_default_post_type');

function remove_default_post_type()
{
  remove_menu_page('edit.php');
}


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
    'film',
    array(
      'labels' => array(
        'name' => __('Films'),
        'singular_name' => __('Film'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'films'),
      'menu_icon' => 'dashicons-format-video',
    )
  );
  register_post_type(
    'book',
    array(
      'labels' => array(
        'name' => __('Books'),
        'singular_name' => __('Book'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'joanna-helander/books'),
      'menu_icon' => 'dashicons-book',
    )
  );
  register_post_type(
    'photo',
    array(
      'labels' => array(
        'name' => __('Photos'),
        'singular_name' => __('Photo'),
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'joanna-helander/photos'),
      'menu_icon' => 'dashicons-images-alt',
    )
  );
}
add_action('init', 'create_posttype');


function load_js()
{
  wp_enqueue_script('burger-script', './wp-content/themes/kinokoszyk/burger-script.js');
  wp_enqueue_script('header_location_script', './wp-content/themes/kinokoszyk/header-location.js');
}
add_action('wp_enqueue_scripts', 'load_js');


function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// small function to see if current page is one of the pages that should show joannas menu
function is_joanna_page()
{
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $joannaUrls = array(
    'biography',
    'books',
    'photos',
    'joanna'
  );

  foreach ($joannaUrls as $page) {
    if (stripos($url, $page) != false) return true;
  }
  return false;
}

function wpdocs_remove_menues()
{
  remove_menu_page('edit.php');
  remove_menu_page('upload.php');
  remove_menu_page('edit-comments.php');
}

add_action('admin_menu', 'wpdocs_remove_menues');


//Breadcrumbs
function the_breadcrumb()
{

  $sep = ' | ';

  if (!is_front_page()) {

    echo '<div class="breadcrumbs">';
    echo '<a href="';
    echo get_option('home');
    echo '">';
    bloginfo('name');
    echo '</a>' . $sep;

    if (is_category() || is_single()) {
      the_category('title_li=');
    } elseif (is_archive() || is_single()) {
      if (is_day()) {
        printf(__('%s', 'text_domain'), get_the_date());
      } elseif (is_month()) {
        printf(__('%s', 'text_domain'), get_the_date(_x('F Y', 'monthly archives date format', 'text_domain')));
      } elseif (is_year()) {
        printf(__('%s', 'text_domain'), get_the_date(_x('Y', 'yearly archives date format', 'text_domain')));
      } else {
        _e('Films Archives', 'text_domain');
      }
    }

    if (is_single()) {
      echo $sep;
      the_title();
    }

    if (is_page()) {
      echo the_title();
    }

    if (is_home()) {
      global $post;
      $page_for_posts_id = get_option('page_for_posts');
      if ($page_for_posts_id) {
        $post = get_post($page_for_posts_id);
        setup_postdata($post);
        the_title();
        rewind_posts();
      }
    }

    echo '</div>';
  }
}
