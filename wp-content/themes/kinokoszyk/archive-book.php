<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="flex relative mx-2 md:mx-16 lg:mx-[120px] breadcrumbs font-text font-thin uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
        <h1 class="mt-0 uppercase font-black lg:mb-16 lg:text-desktopH1 md:text-tabletH1 text-mobileH1"><?php post_type_archive_title(); ?></h1>

        <div class="w-full flex flex-wrap justify-start lg:gap-14 gap-1">
            <!-- This is a card in the grid -->
            <?php while (have_posts()) : the_post(); ?>
                <?php
                $image = get_field('book_image');
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

                    <!-- What's being showed -->
                    <div class="flex flex-col w-[48%] lg:w-[30%] font-text mb-16">
                        <a href="<?php the_permalink(); ?>" title="<?= esc_attr($title); ?>">
                            <img class="object-fill hover:border-2 aspect-[8/12] w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                        </a>
                        <a class="font-bold text-mobileP lg:text-desktopP md:text-tabletP" href=<?php the_permalink() ?>> <?= the_title(); ?></a>
                        <p class="text-mobileP lg:text-desktopP md:text-tabletP"><?= get_field('year'); ?></p>
                    </div>

                <?php endif; ?>

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