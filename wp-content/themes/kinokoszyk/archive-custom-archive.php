<?php get_header();
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'custom-archive',
    'posts_per_page' => 6,
    'paged' => $paged,
);
$archive_item_query = new WP_Query($args); ?>

<?php if (have_posts()) : ?>
    <div class="flex relative mx-2 md:mx-16 lg:mx-[120px] breadcrumbs font-text font-thin uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    };
endif; ?>
    </div>


    <section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
        <h1 class="mt-0 uppercase font-black lg:mb-16 lg:text-desktopH1 md:text-tabletH1 text-mobileH1"><?php post_type_archive_title(); ?></h1>
        <div>
            <?php


            if ($archive_item_query->have_posts()) :
                while ($archive_item_query->have_posts()) : $archive_item_query->the_post(); ?>
                    <div class="basis-1/2">
                        <h4 class="font-text lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?= the_title(); ?></h4>
                        <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text max-w-[712px]"><b><?php the_field('archive_item_year'); ?></b></p>
                        <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text  max-w-[712px]"><?php the_field('archive_item_paragraph'); ?></p>


                    </div>
                    <div class="basis-1/2">
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
                            $height = $image1['sizes'][$size . '-height']; ?>

                            <img class="object-cover w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />

                        <?php endif; ?>
                        <hr class="border-black my-28 border-2">
                        <!-- EOF: card in the grid -->
                    <?php endwhile; ?>
                    </div>

                    <section class="font-text flex text-desktopP flex-row justify-center">
                        <div class="mx-2 mt-2 mb-28 ">
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

        </div>
    </section>
    <?php wp_reset_postdata(); ?>
    <?php get_footer(); ?>