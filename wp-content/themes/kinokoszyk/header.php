<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- Load Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>

<body class="font-body">

    <nav>
        <?php $menuItems = wp_get_nav_menu_items('Kino Header Menu'); ?>
        <?php if ($menuItems) foreach ($menuItems as $item) : ?>
            <a title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                <?= $item->title; ?>
            <?php endforeach ?>
    </nav>