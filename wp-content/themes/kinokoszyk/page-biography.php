<?php get_header(); ?>

<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <div class="breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <h1 class="font-heading font-black mb-16 lg:text-desktopH1 md:text-tabletH1 max-md:mb-4 text-mobileH1"><?php the_title(); ?></h1>
    <div class="w-full">
        <img class="w-full h-full shrink-0" src="<?= get_template_directory_uri(); ?>/src/biography.png" alt="Joanna Helander">
    </div>
    <h2 class="font-heading font-bold lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 mt-16 max-md:mt-4"><?php the_field('biography_header') ?></h2>
    <h4 class="font-text lg:text-desktopH4 md:text-tabletH4 max-md:text-mobileH4 font-bold mt-2"><?php the_field('biography_subheader') ?></h4>
    <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text mt-6 max-w-[712px]"><?php the_field('biography_paragraph') ?></p>

</section>

<?php get_footer(); ?>