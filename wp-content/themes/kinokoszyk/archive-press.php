<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="flex relative mx-2 md:mx-16 lg:mx-[120px] breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
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

    <section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
        <div class="">
            <?php while (have_posts()) : the_post(); ?>
                <h2><?= the_title(); ?></h2>
                <h3><?= get_field('press_item_year'); ?></h3>
                <h3><?= get_field('press_item_description'); ?></h3>
                <a href="<?= the_field('press_item_link'); ?>"><button class="bg-buttonRed px-2 h-11 text-white">Read here </button class=""></a>
                <!-- press LINK -->
            <?php endwhile; ?>
        </div>


        <section class="font-text flex text-desktopP flex-row justify-center">
            <div class="mx-2 mt-2 mb-28 ">
                <?php echo the_pagination(array(
                    'prev_text'    => ' < ',
                    'next_text'    => ' > '
                ));
                ?>
            </div>
        </section>

    <?php endif; ?>
    </section>

    <?php get_footer(); ?>