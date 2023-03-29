<!DOCTYPE html>
<html class="m-0" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <link rel="shortcut icon" href="/" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <!-- link to burgr menu icon -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body class="font-body w-11/12 mx-auto">
    <?php wp_body_open(); ?>

    <nav>
        <div class="primary-menu hidden">
            <?php $primaryMenuItems = wp_get_nav_menu_items('Primary');
            print_menu_items($primaryMenuItems); ?>

        </div>
        <?php
        // print_r(get_site_url());
        ?>

        <div class="switching-menu hidden">
            <?php $currentPageId = get_queried_object_id(); ?>
            <?php $kinoMenuItems = wp_get_nav_menu_items('Kino Header Menu');
            print_menu_items($kinoMenuItems); ?>
        </div>
    </nav>

    <!-- a nav solution -->
    <nav class="burger-menu flex flex-row items-center flex-nowrap w-full justify-between">
        <div>
            <a href="./index.php">[LOGO]</a>
        </div>
        <div id="nav-links" class="flex flex-col absolute bg-white z-10 top-0 left-[-100%] w-full h-full mt-12 opacity-80 backdrop-blur duration-500
        md:z-0 md:h-fit md:static md:mt-0 md:flex-row md:justify-between">
            <div>
                <!-- writes out the menu items specific to the selected menu -->
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-menu', // pages needed: joanna and home or kino
                    'container' => false,
                    'menu_class' => 'flex flex-row items-center h-full justify-center gap-2 font-bold md:gap-1 md:justify-start md:gap-8',
                    'add_li_class' => 'hover:text-orange-600 text-xl'
                )) ?>
            </div>

            <?php
            // reads in the url and creates a array with urls wich joanna uses 
            $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
            $joannaUrls = array(
                'http://kino.local/biography/',
                'http://kino.local/books/',
                'http://kino.local/photos/',
                'http://kino.local/joanna/'
            );

            if (in_array($url, $joannaUrls)) { // if the url is the same as anny of the joanna urls it shows her menu else it defualts to the kino menu
                wp_nav_menu(array(
                    'theme_location' => 'joanna-menu', // pages needed: photos, books, biography and contacts
                    'container' => false,
                    'menu_class' => 'flex flex-col items-center h-full justify-evenly font-bold md:gap-1 md:flex-row md:justify-end md:gap-8',
                    'add_li_class' => 'hover:text-orange-600 text-3xl md:text-xl'
                ));
            } else {
                wp_nav_menu(array(
                    'theme_location' => 'kino-menu', // pages needed: about, films and contacts 
                    'container' => false,
                    'menu_class' => 'flex flex-col items-center h-full justify-evenly font-bold md:gap-1 md:flex-row md:justify-end md:gap-8',
                    'add_li_class' => 'hover:text-orange-600 text-3xl md:text-xl'
                ));
            }
            ?>
        </div>
        <div>
            <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer z-20 relative md:hidden"></ion-icon>
        </div>
    </nav>