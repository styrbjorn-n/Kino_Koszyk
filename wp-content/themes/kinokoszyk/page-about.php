<?php get_header(); ?>

<section class="mx-[120px] mb-32">
    <div class="breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <h1 class="font-heading font-black text-desktopH1 mb-16"><?php the_title(); ?></h1>
    <div class="w-full border-black">
        <img class="w-full h-full bg-gray-400 shrink-0" src="<?= get_template_directory_uri(); ?>/src/filmbilder/Kobieta (Women)/8_mars_kvinnodagen2 1.png" alt="">
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class=""><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


<?php get_footer(); ?>