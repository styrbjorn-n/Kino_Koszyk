<?php
$joanna_menu = wp_get_nav_menu_items('joanna-header-menu');
$kino_menu = wp_get_nav_menu_items('kino-header-menu');
$segments = get_url_segments();
$current_page_id = get_queried_object_id();
$queried_object = get_queried_object();
$slug = get_last_url_slug();
?>
<!DOCTYPE html>
<html class="m-0 text-primary bg-[#FEFEFE]" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <title>Kino Koszyk</title>
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/src/logoblack.svg" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;700&family=Playfair+Display:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <?php wp_body_open(); ?>
    <header class="font-heading lg:mb-16 md:mb-4 sm:mb-2 py-6 lg:px-6 px-2 md:px-3 sticky top-0 bg-white z-10 w-full">
        <!-- a nav solution -->
        <nav class="burger-menu flex flex-row items-center flex-nowrap w-full lg:justify-between">
            <div class="flex flex-nowrap md:gap-2 lg:gap-8 w-full justify-between">
                <div class="flex gap-0 w-full justify-between max-sm:pr-1">
                    <a href="<?= home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/src/logoblack.svg" alt="Kino Koszyk Logo" class="w-12 h-full"></a>
                    <div class="flex w-full justify-center md:justify-start md:ml-4">
                        <div class="primary-menux lg:w-fit z-30 bg-white lg:z-0 justify-self-stretch">
                            <?php
                            if (in_array("joanna-helander", $segments)) {
                                echo '<a  href="/" class="hover:text-hover text-mobileHeaderLink md:text-tabletH3 w-fit lg:text-desktopHeader">' . "Go to Kino Koszyk"  . '</a>';
                            } else {
                                echo '<a href=' . get_page_link(949) . ' class="hover:text-hover text-mobileHeaderLink md:text-tabletH3 font-bold w-fit lg:text-desktopHeader"> Go to Joanna Helander </a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div id="nav-links" class="flex flex-col absolute items-start bg-white z-20 top-0 left-[-120%] w-screen h-screen mt-12 md:mt-14 duration-500 lg:z-0 lg:h-fit lg:static lg:mt-0 lg:flex-row lg:justify-between lg:justify-self-end lg:w-fit ">

                    <div class="nav-menu-list flex flex-col items-start px-4 min-h-[45%] max-h-full justify-between font-bold lg:flex-row lg:justify-end lg:gap-8 lg:mt-0 mt-10">
                        <?php
                        if (in_array("joanna-helander", $segments)) {
                        ?>
                            <?php if ($joanna_menu) foreach ($joanna_menu as $link) : ?>

                                <a title="<?= $link->title; ?>" class="hover:text-hover text-mobileMenu md:text-tabletMenu w-fit lg:text-desktopHeader <?php active_menu_link($link->title, $segments) ?> " href="<?= $link->url; ?>"><?= $link->title; ?></a>
                            <?php endforeach; ?>
                        <?
                        } else {
                        ?>

                            <?php if ($kino_menu) foreach ($kino_menu as $link) : ?>
                                <a title="<?= $link->title; ?>" class="hover:text-hover text-mobileMenu md:text-tabletMenu w-fit lg:text-desktopHeader <?php active_menu_link($link->title, $segments) ?>" href="<?= $link->url; ?>"><?= $link->title; ?></a>
                        <?php endforeach;
                        } ?>
                    </div>
                </div>
                <div onclick="onToggleMenu(this)" class="w-[30px] h-[30px] cursor-pointer lg:hidden z-20 lg:z-0">
                    <div id="line-container" class="w-full h-full space-y-2">
                        <div class="w-full h-0.5 bg-gray-600"></div>
                        <div class="w-full h-0.5 bg-gray-600"></div>
                        <div class="w-full h-0.5 bg-gray-600"></div>
                    </div>
                </div>
            </div>
        </nav>
    </header>