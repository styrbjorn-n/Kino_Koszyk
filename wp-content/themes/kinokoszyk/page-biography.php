<?php get_header();
$slug = get_last_url_slug();
$joanna_sub_menu = wp_get_nav_menu_items('joanna-sub-menu');
$segments = get_url_segments();

?>

<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <div class="flex relative breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <div class="primary-menu-list flex flex-col lg:text-desktopH2 md:text-tabletH2 text-mobileH2 md:flex-row flex-wrap items-start h-full max-md:justify-center font-bold lg:justify-start gap-4 [&>li:nth-child(2)>span]:hidden">
        <?php if ($joanna_sub_menu) foreach ($joanna_sub_menu as $link) : ?>

            <a title="<?= $link->title; ?>" class="hover:text-hover <?php active_menu_link($link->title, $segments) ?> " href="<?= $link->url; ?>"><?= strtoupper($link->title); ?></a>
        <?php endforeach; ?>
    </div>

    <div class="w-full">
        <div class="w-full h-full max-md:mt-4">
            <?php
            $image = get_field('biography_top_image');
            if ($image) {

                $title = $image['title'];
                $alt = $image['alt'];

                $size = 'large';
                $thumb = $image['sizes'][$size];
            };
            ?>
            <img class="object-fill w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />


        </div>
    </div>
    <section class="flex flex-row">

        <div>
            <h2 class="font-heading font-bold lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 mt-16 max-md:mt-4"><?php the_field('biography_header') ?></h2>
            <h4 class="font-text lg:text-desktopH4 md:text-tabletH4 max-md:text-mobileH4 font-bold mt-2"><?php the_field('biography_subheader') ?></h4>
            <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text mt-6 max-w-[712px]"><?php the_field('biography_paragraph') ?></p>
            <div class="flex flex-row gap-8 mt-4">
                <a href="<?php the_field('biography_link_1'); ?>"><button class="text-center bg-buttonRed px-2 h-8 w-16 text-white font-text">Photos</button></a>
                <a href="<?php the_field('biography_link_2'); ?>"><button class="text-center bg-buttonRed px-2 h-8 w-16 text-white font-text">Books</button></a>
            </div>
        </div>
        <div class="w-full h-full max-md:mt-4">
            <?php
            $image = get_field('biography_side_image');
            if ($image) {

                $title = $image['title'];
                $alt = $image['alt'];

                $size = 'large';
                $thumb = $image['sizes'][$size];
            };
            ?>
            <img class="object-fill w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
        </div>
    </section>
</section>

<?php get_footer(); ?>