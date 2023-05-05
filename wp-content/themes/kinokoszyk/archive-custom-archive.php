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

                <h2><?= the_title(); ?></h2>
                <h3><?= get_field('archive_item_year'); ?></h3>
                <p><?= get_field('archive_item_paragraph'); ?></p>

                <?php
                $image1 = get_field('archive_item_image_1');
                if ($image1) :

                    // Image variables.
                    // $url = the_permalink();
                    $title = $image1['title'];
                    $alt = $image1['title'];
                    $caption = $image1['caption'];

                    // Thumbnail size attributes.
                    $size = 'large';
                    $thumb = $image1['sizes'][$size];
                    $width = $image1['sizes'][$size . '-width'];
                    $height = $image1['sizes'][$size . '-height'];
                endif; ?>
                <?php
                $image2 = get_field('archive_item_image_2');
                if ($image2) :

                    // Image variables.
                    // $url = the_permalink();
                    $title = $image2['title'];
                    $alt = $image2['title'];
                    $caption = $image2['caption'];

                    // Thumbnail size attributes.
                    $size = 'large';
                    $thumb = $image2['sizes'][$size];
                    $width = $image2['sizes'][$size . '-width'];
                    $height = $image2['sizes'][$size . '-height'];
                ?>

                <?php endif; ?>
                <hr class="border-black my-28 border-2">
                <!-- EOF: card in the grid -->
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

        <!-- EOF: the grid -->
    <?php endif; ?>
    </section>

    <?php get_footer(); ?>