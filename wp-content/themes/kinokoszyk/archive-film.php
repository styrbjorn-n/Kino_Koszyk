<?php get_header(); ?>
<?php if (have_posts()) : ?>

    <div class="mx-2 md:mx-16 lg:mx-[120px] breadcrumbs uppercase font-text text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
        <h1 class="mt-0 uppercase font-black lg:mb-16 lg:text-desktopH1 "><?php post_type_archive_title(); ?></h1>
        <?php if (have_posts()) : ?>


            <div class="w-full flex flex-wrap justify-between">
                <!-- This is a card in the grid -->
                <?php while (have_posts()) : the_post(); ?>

                    <?php
                    $image = get_field('film_image');
                    if ($image) :

                        // Image variables.
                        // $url = the_permalink();
                        $title = $image['title'];
                        $alt = $image['title'];
                        $caption = $image['caption'];

                        // Thumbnail size attributes.
                        $size = 'large';
                        $thumb = $image['sizes'][$size];
                        $width = $image['sizes'][$size . '-width'];
                        $height = $image['sizes'][$size . '-height'];
                    ?>
                        <div class="flex flex-col w-1/2 pr-2 lg:w-1/4">
                            <a href="<?php the_permalink(); ?>" title="<?= esc_attr($title); ?>">
                                <img class="object-cover aspect-[8/12] w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                            </a>
                            <a class="font-bold text-mobileP lg:text-desktopP md:text-tabletP" href=<?php the_permalink() ?>> <?= the_title(); ?></a>
                            <p class="text-mobileP lg:text-desktopP md:text-tabletP"><?= get_field('year'); ?></p>
                        </div>

                    <?php endif; ?>

                    <!-- EOF: card in the grid -->
                <?php endwhile; ?>
            </div>
            <section class="flex flex-row justify-center">
                <?php echo the_pagination(array(
                    'prev_text'    => ' < ',
                    'next_text'    => ' > '
                ));
                ?>
            </section>

            <!-- EOF: the grid -->
        <?php endif; ?>
    <?php endif; ?>


    </section>

    <?php get_footer(); ?>