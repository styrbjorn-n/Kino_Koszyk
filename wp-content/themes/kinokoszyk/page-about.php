<?php get_header(); ?>

<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <div class="flex relative breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="font-heading uppercase font-black mb-16 lg:text-desktopH1 md:text-tabletH1 max-md:mb-4 text-mobileH1"><?php the_title(); ?></h1>
            <div class="w-full h-full max-md:mt-4">
                <img class="w-full h-full shrink-0" src="<?= get_template_directory_uri(); ?>/src/filmbilder/Kobieta (Women)/Kvinnodagen 1976.png" alt="Kvinnodagen Ruda, 1976">
            </div>
            <img src="" alt="">
            <h2 class="mt-16 mb-6 font-heading text-desktopH2"><?php the_field('kino_koszyk_header') ?></h2>
            <p class="mb-16 font-text text-desktopP max-w-[712px] lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 max-md:mt-4 lg:text-desktopH4 md:text-tabletH4 max-md:text-mobileH4 lg:text-desktopP md:text-tabletP max-md:text-mobileP sm:mt-2"><?php the_field('kino_koszyk_description'); ?></p>
            <h2 class="mb-1 font-heading lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 font-semibold"><?php the_field('joanna_helander_header') ?></h2>
            <h4 class="mb-6 font-text lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?php the_field('joanna_helander_subheader') ?></h4>
            <p class="mb-16 font-text text-desktopP max-w-[712px] lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 max-md:mt-4 lg:text-desktopH4 md:text-tabletH4 max-md:text-mobileH4 lg:text-desktopP md:text-tabletP max-md:text-mobileP sm:mt-2"><?php the_field('joanna_helander_description') ?></p>
            <a href="<?php the_field('about_page_link'); ?>"><button class="bg-buttonRed px-2 h-11 text-white">Read more about Joanna</button></a>
            <h2 class="mb-1 font-heading lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 font-semibold"><?php the_field('bo_persson_header') ?></h2>
            <h4 class="mb-6 font-text lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?php the_field('bo_persson_subheader') ?></h4>
            <p class="mb-16 font-text text-desktopP max-w-[712px] lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 max-md:mt-4 lg:text-desktopH4 md:text-tabletH4 max-md:text-mobileH4 lg:text-desktopP md:text-tabletP max-md:text-mobileP sm:mt-2"><?php the_field('bo_persson_description') ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


<?php get_footer(); ?>