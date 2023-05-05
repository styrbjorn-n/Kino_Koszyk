<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="relative mx-2 md:mx-16 lg:mx-[120px] breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>


    <section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
        <h1 class="mt-0 uppercase font-black lg:mb-16 lg:text-desktopH1 md:text-tabletH1 text-mobileH1"><?php post_type_archive_title(); ?></h1>
        <div class="">
            <?php while (have_posts()) : the_post(); ?>
                <h3><?= get_field('exhibition_name'); ?></h3>
                <h3><?= get_field('exhibition_year'); ?></h3>
                <h3><?= get_field('exhibition_location'); ?></h3>
                <p><?= get_field('exhibition_description'); ?></p>
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