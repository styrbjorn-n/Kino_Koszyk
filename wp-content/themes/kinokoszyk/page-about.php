<?php get_header(); ?>

<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <div class="flex relative breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <h1 class="font-heading uppercase font-black mb-16 lg:text-desktopH1 md:text-tabletH1 max-md:mb-4 text-mobileH1"><?php the_title(); ?></h1>
    <div class="w-full h-full max-md:mt-4">
        <img class="w-full h-full shrink-0" src="<?= get_template_directory_uri(); ?>/src/filmbilder/Kobieta (Women)/Kvinnodagen 1976.png" alt="Kvinnodagen Ruda, 1976">
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class=""><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


<?php get_footer(); ?>