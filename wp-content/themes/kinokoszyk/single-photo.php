<?php get_header(); ?>

<div class="flex relative breadcrumbs uppercase font-text font-thin text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>
<?php $fields = get_field_objects(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h2 class="text-4xl"><?php the_title(); ?></h2>

        <p class="text-xl"> <?php the_content(); ?> </p>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>