<?php get_header(); ?>
<div class="breadcrumbs uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>
<h1 class="font-heading text-mobileH1 lg:text-desktopH1 md:text-tabletH1">FILMS</h1>
<?php if (have_posts()) : ?>
    <div>
        <!-- This is a card in the grid -->
        <?php while (have_posts()) : the_post(); ?>

            <a href=<?php the_permalink() ?>> <?= the_title(); ?> </a>
            <!-- EOF: card in the grid -->
        <?php endwhile; ?>

        <!-- EOF: the grid -->
    <?php endif; ?>

    <?php get_footer(); ?>