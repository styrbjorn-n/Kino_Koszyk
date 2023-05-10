<?php get_header(); ?>

<section class="mx-2 md:mx-16 lg:mx-[120px]">
    <div class="flex relative breadcrumbs font-text font-thin uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <h1 class="font-heading lg:uppercase font-black lg:text-desktopH1 mt-1 mb-4 lg:mb-16 md:text-tabletH1 md:mb-4 text-mobileH1"><?php the_title(); ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="flex flex-wrap lg:text-desktopP md:text-tabletP text-mobileP font-text font-normal mt-4 mb-4 lg:mt-8"><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>