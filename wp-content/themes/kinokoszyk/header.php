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
<body class="font-body">
    <?php wp_body_open(); ?>

    <nav>
        <div class="primary-menu">
            <?php $primaryMenuItems = wp_get_nav_menu_items('Primary'); ?>
            <?php if ($primaryMenuItems) foreach ($primaryMenuItems as $item) : ?>
                <a title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                    <?= $item->title; ?>
                <?php endforeach ?>
        </div>


        <div class="switching-menu">
            <?php $kinoMenuItems = wp_get_nav_menu_items('Kino Header Menu'); ?>
            <?php if ($kinoMenuItems) foreach ($kinoMenuItems as $item) : ?>
                <a title="<?= $item->title; ?>" href="<?= $item->url; ?>">
                    <?= $item->title; ?>
                <?php endforeach ?>
        </div>
    </nav>