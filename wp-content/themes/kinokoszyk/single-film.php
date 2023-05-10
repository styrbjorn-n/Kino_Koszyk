<?php get_header(); ?>

<section class="mx-2 md:mx-16 lg:mx-[120px]">
    <div class="flex relative breadcrumbs mb-16 uppercase font-text font-thin text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>

    <?php $fields = get_field_objects(); ?>
    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>
            <?php if (get_field('film_image_2')) :
                $headerImage = get_field('film_image_2');

                $alt = $headerImage['alt'];

                $size = 'large';
                $thumb = $headerImage['sizes'][$size];
                $width = $headerImage['sizes'][$size . '-width'];
                $height = $headerImage['sizes'][$size . '-height']; ?>
                <img class="object-cover w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
            <?php endif; ?>
            <div class="overflow-hidden">
                <?php if (get_field('trailer')) :
                    the_field('trailer');
                endif; ?>
            </div>
            <section class="mt-16 flex flex-row justify-between">
                <div class="max-w-[490px]">
                    <h4 class="font-header text-desktopH4"><?php the_title(); ?></h4>
                    <p class="mb-16"><?php the_field('year'); ?></p>
                    <p><?php the_field('film_description'); ?></p>
                </div>
                <div>
                    <?php
                    //functions.php:51 as of 2023/05/04
                    print_film_role('directors');
                    print_film_role('producers');
                    print_film_role('cinematography');
                    print_film_role('music');
                    print_film_role('featuring');

                    //functions.php:59 as of 2023/05/04
                    print_film_extra_role(1);
                    print_film_extra_role(2);
                    print_film_extra_role(3);
                    print_film_extra_role(4);
                    ?>

                </div>
                <div>
                    <?php
                    if (get_field('selection_image')) :
                        $image = get_field('selection_image');

                        $alt = $image['alt'];

                        $size = 'large';
                        $thumb = $image['sizes'][$size];
                        $width = $image['sizes'][$size . '-width'];
                        $height = $image['sizes'][$size . '-height']; ?>
                        <p class="font-bold">Selections</p>
                        <img class="object-cover w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                    <?php endif;

                    if (get_field('selection_image_2')) :
                        $image2 = get_field('selection_image_2');

                        $alt = $image2['alt'];

                        $size = 'large';
                        $thumb = $image2['sizes'][$size];
                        $width = $image2['sizes'][$size . '-width'];
                        $height = $image2['sizes'][$size . '-height']; ?>
                        <img class="object-cover w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                    <?php endif;

                    if (get_field('selection_image_3')) :
                        $image3 = get_field('selection_image_3');

                        $alt = $image3['alt'];

                        $size = 'large';
                        $thumb = $image3['sizes'][$size];
                        $width = $image3['sizes'][$size . '-width'];
                        $height = $image3['sizes'][$size . '-height']; ?>
                        <img class="object-cover w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                    <?php endif;

                    if (get_field('selection_image_4')) :
                        $image4 = get_field('selection_image_4');

                        $alt = $image4['alt'];

                        $size = 'large';
                        $thumb = $image4['sizes'][$size];
                        $width = $image4['sizes'][$size . '-width'];
                        $height = $image4['sizes'][$size . '-height']; ?>
                        <img class="object-cover w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                    <?php endif;

                    if (get_field('selection_image_5')) :
                        $image5 = get_field('selection_image_5');

                        $alt = $image5['alt'];

                        $size = 'large';
                        $thumb = $image5['sizes'][$size];
                        $width = $image5['sizes'][$size . '-width'];
                        $height = $image5['sizes'][$size . '-height']; ?>
                        <img class="object-cover w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                    <?php endif; ?>
                </div>
            </section>
        <?php endwhile; ?>

    <?php endif; ?>
</section>
<?php get_footer(); ?>