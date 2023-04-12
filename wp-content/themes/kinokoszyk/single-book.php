<?php get_header(); ?>

<div class="breadcrumbs uppercase font-text text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>
<?php
$fields = get_field_objects(); ?>


<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <!-- <?php the_breadcrumb() ?> -->

        <h1 class="font-black mb-16 mx-2 md:mx-16 font-heading text-mobileH1 lg:text-desktopH1 md:text-tabletH1"><?php post_type_archive_title() ?>Books</h1>

        <h2 class="mx-2 md:mx-16 text-mobileH4 lg:text-desktopH4 md:text-tabletH4"><?php the_title(); ?></h2>

        <p class="mx-2 md:mx-16 text-mobile lg:text-desktop md:text-tablet"><?= get_field('year') ?></p>
        <p class="mx-2 md:mx-16 text-mobile lg:text-desktop md:text-tablet"><?= get_field('language') ?></p>
        <p class="mx-2 md:mx-16 text-mobile lg:text-desktop md:text-tablet"><?= get_field('writer') ?></p>

        <p class="m-8 mx-2 md:mx-16 text-mobile lg:text-desktop md:text-tablet"><?= "Publisher: ", get_field('publisher'), "<br>", "ISBN: ", get_field('isbn'); ?></p>

        <p class="text-xl"> <?php the_content(); ?> </p>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>