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
        <div class="primary-menu">
            <?php $primaryMenuItems = wp_get_nav_menu_items('Primary');
            print_menu_items($primaryMenuItems); ?>

        </div>
        <?php
        // print_r(get_site_url());
        ?>

        <div class="switching-menu">
            <?php $currentPageId = get_queried_object_id(); ?>
            <?php $kinoMenuItems = wp_get_nav_menu_items('Kino Header Menu');
            print_menu_items($kinoMenuItems); ?>
        </div>
    </nav>

    <!-- navbar with burgermenu can change out temp links for the real once,
     when we have gotten it to write the out properly -->
    <nav class="burger-menu flex flex-row justify-between items-center flex-nowrap w-full">
        <div>
            <a href="#">[LOGO]</a>
        </div>
        <div id="nav-links" class="absolute bg-white z-10 top-0 left-[-100%] w-full h-full mt-12 opacity-80 backdrop-blur duration-500
        md:z-0 md:h-fit md:static">
            <ul class="flex flex-col items-center gap-10 h-full justify-around md:gap-1 md:flex-row">
                <li><a class="hover:text-orange-600" href="#">[placeholder]</a></li>
                <li><a class="hover:text-orange-600" href="#">[placeholder]</a></li>
                <li><a class="hover:text-orange-600" href="#">[placeholder]</a></li>
            </ul>
        </div>
        <div>
            <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer z-20 relative md:hidden"></ion-icon>
        </div>
    </nav>