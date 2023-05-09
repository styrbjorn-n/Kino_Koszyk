<?php get_header(); ?>

<section class="mx-[120px] mb-32">
    <div class="flex relative breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <h1 class="font-heading uppercase font-black text-desktopH1 mb-16 lg:text-desktopH1 md:text-tabletH1 max-md:mb-4 text-mobileH1"><?php the_title(); ?></h1>
    <h4 class="font-text font-black text-desktopH4 lg:text-desktopH4 md:text-tabletH4 max-md:mb-4 text-mobileH4">Get in touch with me</h4>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text mt-6 max-w-[712px]"><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>