<!DOCTYPE html>
<html class="m-0 text-primary bg-[#FEFEFE]" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/src/logoblack.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&family=Playfair+Display:wght@400;600;700;900&display=swap" rel="stylesheet"> <!-- link to burgr menu icon -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body class="">
    <header class="font-heading mb-16 mx-2 py-6">
        <?php wp_body_open(); ?>
        <nav>
            <div class="primary-menu hidden">
                <?php $primaryMenuItems = wp_get_nav_menu_items('Primary');
                print_menu_items($primaryMenuItems); ?>

            </div>
            <div class="switching-menu hidden">
                <?php $kinoMenuItems = wp_get_nav_menu_items('Kino Header Menu');
                print_menu_items($kinoMenuItems); ?>
            </div>
        </nav>

        <!-- a nav solution -->
        <nav class="burger-menu flex flex-row items-center flex-nowrap w-full lg:justify-between">
            <div class="flex flex-nowrap lg:gap-8 w-full">
                <div>
                    <a href="http://kino.local"><img src="<?= get_template_directory_uri(); ?>/src/logoblack.svg" alt="Kino Koszyk Logo" class="w-12"></a>
                </div>
                <div class="w-full lg:w-fit z-20 lg:z-0 justify-self-stretch">
                    <!-- writes out the menu items specific to the selected menu -->
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary-menu', // pages needed: joanna and home or kino
                        'container' => false,
                        'menu_class' => 'primary-menu-list flex flex-row items-center h-full justify-center gap-2 font-bold lg:gap-1 lg:justify-start lg:gap-8',
                        'add_li_class' => 'hover:text-hover text-xl'
                    )) ?>

                </div>
            </div>
            <div id="nav-links" class="flex flex-col absolute bg-white z-10 top-0 left-[-100%] w-full h-full mt-12 opacity-80 backdrop-blur duration-500
        lg:z-0 lg:h-fit lg:static lg:mt-0 lg:flex-row lg:justify-between lg:justify-self-end lg:w-fit">

                <?php

                if (is_joanna_page()) {
                    $menu = 'joanna-menu';
                } else {
                    $menu = 'kino-menu';
                }
                wp_nav_menu(array(
                    'theme_location' => $menu,
                    'container' => false,
                    'menu_class' => 'flex flex-col items-center h-full justify-evenly font-bold lg:gap-1 lg:flex-row lg:justify-end lg:gap-8',
                    'add_li_class' => 'hover:text-hover text-3xl md:text-xl'
                ));
                ?>
            </div>
            <div class="w-fit h-[30px] lg:hidden">
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer z-20 relative"></ion-icon>
            </div>
        </nav>
    </header>