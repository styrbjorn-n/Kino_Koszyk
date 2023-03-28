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