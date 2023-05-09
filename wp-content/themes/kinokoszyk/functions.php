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

function get_last_url_slug()
{
    $current_url = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $path = parse_url($current_url, PHP_URL_PATH);
    $segments = explode('/', rtrim($path, '/'));
    $last_segment = end($segments);
    return $last_segment;
}

function active_menu_link($needle, $haystack)
{
    // if (array_key_exists($needle,)) {
    //     # code...
    // }
    // if (!array_search($needle, $haystack, false)) {
    //     echo "<br>else</br>";
    // } else {
    //     echo "text-red-600";
    // }
    if (in_array(strtolower($needle), $haystack)) {
        echo "text-red-600";
    } else {
        echo "<br>else</br>";
    }
};



function get_url_segments()
{
    $current_url = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $path = parse_url($current_url, PHP_URL_PATH);
    $segments = explode('/', rtrim($path, '/'));
    return $segments;
}

add_action("init", "get_last_url_slug");

function print_menu_items($menu)
{
    if ($menu) {
        foreach ($menu as $item) {
            echo "<a title='$item->title' href='$item->url'>$item->title</a>";
        }
    }
};

function print_partner_items($number, $post_id = 953)
{
    if (get_field('partner_link_' . $number, $post_id) && get_field('partner_logo_' . $number, $post_id)) {
        $image = get_field('partner_logo_' . $number, $post_id);
        $alt = $image['alt'];
        $size = 'large';
        $thumb = $image['sizes'][$size];

        echo '<a class="lg:max-w-[148px] " href="' . get_field('partner_link_' . $number, $post_id) . '"><img src="' . esc_url($thumb) . '" alt="' . esc_attr($alt) . '"></a>';
    }
};

function print_film_role($role)
{
    if (get_field($role)) {
        echo '<p class="font-bold mt-10">' . ucfirst($role) . '</p>';
        echo '<p>' . get_field($role) . '</p>';
    }
};

function print_film_extra_role($number)
{
    if (get_field('role_' . $number) && get_field('role_name_' . $number)) {
        echo '<p class="font-bold mt-10">' . get_field('role_' . $number) . '</p>';
        echo '<p>' . get_field('role_name_' . $number) . '</p>';
    }
};



function register_theme_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),
        'kino-menu' => __('Kino Menu'),
        'joanna-menu' => __('Joanna Menu'),
        'joanna-sub-menu' => __('Joanna Sub Menu')
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
        'custom-archive',
        array(
            'labels' => array(
                'name' => __('Archive'),
                'singular_name' => __('Archive Item'),
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 4,
            'menu_order' => 10,

            'rewrite' => array('slug' => 'archive'),
            'menu_icon' => 'dashicons-media-document',
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
            'menu_position' => 5,
            'menu_order' => 10,
            'rewrite' => array('slug' => 'joanna-helander/books'),
            'menu_icon' => 'dashicons-book',
        )
    );
    register_post_type(
        'exhibitions',
        array(
            'labels' => array(
                'name' => __('Exhibitions'),
                'singular_name' => __('Exhibition'),
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 6,
            'menu_order' => 10,
            'rewrite' => array('slug' => 'joanna-helander/exhibitions'),
            'menu_icon' => 'dashicons-admin-page',
        )
    );
    register_post_type(
        'film',
        array(
            'labels' => array(
                'name' => __('Films'),
                'singular_name' => __('Film'),
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 7,
            'menu_order' => 10,
            'rewrite' => array('slug' => 'films'),
            'menu_icon' => 'dashicons-format-video',
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
            'menu_position' => 8,
            'menu_order' => 10,
            'rewrite' => array('slug' => 'joanna-helander/photos'),
            'menu_icon' => 'dashicons-images-alt',
        )
    );
    register_post_type(
        'press',
        array(
            'labels' => array(
                'name' => __('Press'),
                'singular_name' => __('Press Item'),
            ),
            'public' => true,
            'has_archive' => true,
            'menu_position' => 9,
            'menu_order' => 10,
            'rewrite' => array('slug' => 'joanna-helander/press'),
            'menu_icon' => 'dashicons-media-document',
        )
    );
}
add_action('init', 'create_posttype');

function custom_post_type_pagination($query)
{
    if (!is_admin() && $query->is_main_query() && is_post_type_archive('custom-archive')) {
        $query->set('posts_per_page', 6);
    }
}
add_action('pre_get_posts', 'custom_post_type_pagination');

function load_js()
{
    wp_enqueue_script('burger-script', './wp-content/themes/kinokoszyk/burger-script.js');
    wp_enqueue_script('header_location_script', './wp-content/themes/kinokoszyk/header-location.js');
    wp_enqueue_script('galleryOverlay', '/wp-content/themes/kinokoszyk/galleryOverlay.js');
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

function the_pagination($args = '')
{
    global $wp_query, $wp_rewrite;

    // Setting up default values based on the current URL.
    $pagenum_link = html_entity_decode(get_pagenum_link());
    $url_parts    = explode('?', $pagenum_link);

    // Get max pages and current page out of the current query, if available.
    $total   = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
    $current = get_query_var('paged') ? (int) get_query_var('paged') : 1;

    // Append the format placeholder to the base URL.
    $pagenum_link = trailingslashit($url_parts[0]) . '%_%';

    // URL base depends on permalink settings.
    $format  = $wp_rewrite->using_index_permalinks() && !strpos($pagenum_link, 'index.php') ? 'index.php/' : '';
    $format .= $wp_rewrite->using_permalinks() ? user_trailingslashit($wp_rewrite->pagination_base . '/%#%', 'paged') : '?paged=%#%';

    $defaults = array(
        'base'               => $pagenum_link, // http://example.com/all_posts.php%_% : %_% is replaced by format (below).
        'format'             => $format, // ?page=%#% : %#% is replaced by the page number.
        'total'              => $total,
        'current'            => $current,
        'aria_current'       => 'page',
        'show_all'           => false,
        'prev_next'          => true,
        'prev_text'          => __('&laquo; Previous'),
        'next_text'          => __('Next &raquo;'),
        'end_size'           => 1,
        'mid_size'           => 2,
        'type'               => 'plain',
        'add_args'           => array(), // Array of query args to add.
        'add_fragment'       => '',
        'before_page_number' => '',
        'after_page_number'  => '',
    );

    $args = wp_parse_args($args, $defaults);

    if (!is_array($args['add_args'])) {
        $args['add_args'] = array();
    }

    // Merge additional query vars found in the original URL into 'add_args' array.
    if (isset($url_parts[1])) {
        // Find the format argument.
        $format       = explode('?', str_replace('%_%', $args['format'], $args['base']));
        $format_query = isset($format[1]) ? $format[1] : '';
        wp_parse_str($format_query, $format_args);

        // Find the query args of the requested URL.
        wp_parse_str($url_parts[1], $url_query_args);

        // Remove the format argument from the array of query arguments, to avoid overwriting custom format.
        foreach ($format_args as $format_arg => $format_arg_value) {
            unset($url_query_args[$format_arg]);
        }

        $args['add_args'] = array_merge($args['add_args'], urlencode_deep($url_query_args));
    }

    // Who knows what else people pass in $args.
    $total = (int) $args['total'];
    if ($total < 2) {
        return;
    }
    $current  = (int) $args['current'];
    $end_size = (int) $args['end_size']; // Out of bounds? Make it the default.
    if ($end_size < 1) {
        $end_size = 1;
    }
    $mid_size = (int) $args['mid_size'];
    if ($mid_size < 0) {
        $mid_size = 2;
    }

    $add_args   = $args['add_args'];
    $r          = '';
    $page_links = array();
    $dots       = false;

    if ($args['prev_next'] && $current && 1 < $current) :
        $link = str_replace('%_%', 2 == $current ? '' : $args['format'], $args['base']);
        $link = str_replace('%#%', $current - 1, $link);
        if ($add_args) {
            $link = add_query_arg($add_args, $link);
        }
        $link .= $args['add_fragment'];

        $page_links[] = sprintf(
            '<a class="prev page-numbers" href="%s">%s</a>',
            /**
             * Filters the paginated links for the given archive pages.
             *
             * @since 3.0.0
             *
             * @param string $link The paginated link URL.
             */
            esc_url(apply_filters('paginate_links', $link)),
            $args['prev_text']
        );
    endif;
    if ($args['prev_next'] && $current == 1) {
        $link = '<';
        $page_links[] = sprintf(
            ' < ',
            esc_url(apply_filters('paginate_links', $link)),
            $args['prev_text']
        );
    }

    for ($n = 1; $n <= $total; $n++) :
        if ($n == $current) :
            $page_links[] = sprintf(
                '<span aria-current="%s" class="page-numbers current">%s</span>',
                esc_attr($args['aria_current']),
                $args['before_page_number'] . number_format_i18n($n) . $args['after_page_number']
            );

            $dots = true;
        else :
            if ($args['show_all'] || ($n <= $end_size || ($current && $n >= $current - $mid_size && $n <= $current + $mid_size) || $n > $total - $end_size)) :
                $link = str_replace('%_%', 1 == $n ? '' : $args['format'], $args['base']);
                $link = str_replace('%#%', $n, $link);
                if ($add_args) {
                    $link = add_query_arg($add_args, $link);
                }
                $link .= $args['add_fragment'];

                $page_links[] = sprintf(
                    '<a class="page-numbers" href="%s">%s</a>',
                    /** This filter is documented in wp-includes/general-template.php */
                    esc_url(apply_filters('paginate_links', $link)),
                    $args['before_page_number'] . number_format_i18n($n) . $args['after_page_number']
                );

                $dots = true;
            elseif ($dots && !$args['show_all']) :
                $page_links[] = '<span class="page-numbers dots">' . __('&hellip;') . '</span>';

                $dots = false;
            endif;
        endif;
    endfor;

    if ($args['prev_next'] && $current && $current < $total) :
        $link = str_replace('%_%', $args['format'], $args['base']);
        $link = str_replace('%#%', $current + 1, $link);
        if ($add_args) {
            $link = add_query_arg($add_args, $link);
        }
        $link .= $args['add_fragment'];

        $page_links[] = sprintf(
            '<a class="next page-numbers" href="%s">%s</a>',
            /** This filter is documented in wp-includes/general-template.php */
            esc_url(apply_filters('paginate_links', $link)),
            $args['next_text']
        );
    endif;
    if ($args['prev_next'] && $current == $total) {
        $link = '>';
        $page_links[] = sprintf(
            ' > ',
            esc_url(apply_filters('paginate_links', $link)),
            $args['prev_text']
        );
    }

    switch ($args['type']) {
        case 'array':
            return $page_links;

        case 'list':
            $r .= "<ul class='page-numbers'>\n\t<li>";
            $r .= implode("</li>\n\t<li>", $page_links);
            $r .= "</li>\n</ul>\n";
            break;

        default:
            $r = implode("\n", $page_links);
            break;
    }

    /**
     * Filters the HTML output of paginated links for archives.
     *
     * @since 5.7.0
     *
     * @param string $r    HTML output.
     * @param array  $args An array of arguments. See paginate_links()
     *                     for information on accepted arguments.
     */
    $r = apply_filters('paginate_links_output', $r, $args);

    return $r;
}
function print_category_terms($category, $slug)
{
    $terms = get_terms($category); // Replace 'category' with the slug of the desired taxonomy

    if (!empty($terms) && !is_wp_error($terms)) { ?>
        <ul class="flex justify-between w-fit gap-4 mb-4 md:mb-16 font-text">
            <h3 class="<?= $slug == 'photos' ? 'font-bold text-secondary' : '' ?>"><a href="/joanna-helander/photos/">All </a></h3>
            <?php foreach ($terms as $term) : ?>
                <span class="ml-2">|</span>
                <li>
                    <h3 class="<?= $slug == $term->slug ? 'font-bold text-secondary' : '' ?>"><a href="<?php echo get_term_link($term) ?>"><?= esc_html($term->name); ?></a></h3>
                </li>
            <?php endforeach; ?>
        </ul><?
            }
        }
