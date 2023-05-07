<?php get_header(); ?>

<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <div class="flex relative breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>

    <!-- THIS IS NOT THE CORRECT STYLED MENU, ONLY FOR PLACE HOLDER -->
    <?php wp_nav_menu(array(
        'theme_location' => 'joanna-sub-menu',
        'container' => false,
        'menu_class' => 'xs:whitespace-nowrap xs:flex-col primary-menu-list flex flex-row items-center h-full max-md:justify-center lg:ml-6 gap-2 font-bold lg:justify-start [&>li:nth-child(2)>span]:hidden ',
        'menu_class' => 'xs:whitespace-nowrap xs:flex-col primary-menu-list flex flex-row items-center h-full justify-center mb:gap-2 font-bold lg:justify-start [&>li:nth-child(2)>span]:hidden ',
        'add_li_class' => 'hover:text-hover text-desktopLink',
        'after' => '<span class="max-sm:mr-[8px] sm:mx-[12px] text-primary"> | </span>'
    )) ?>

    <div class="w-full">
        <img class="w-full h-full shrink-0" src="<?= get_template_directory_uri(); ?>/src/biography.png" alt="Joanna Helander">
    </div>
    <h2 class="font-heading font-bold lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 mt-16 max-md:mt-4"><?php the_field('biography_header') ?></h2>
    <h4 class="font-text lg:text-desktopH4 md:text-tabletH4 max-md:text-mobileH4 font-bold mt-2"><?php the_field('biography_subheader') ?></h4>
    <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text mt-6 max-w-[712px]"><?php the_field('biography_paragraph') ?></p>

</section>

<?php get_footer(); ?>