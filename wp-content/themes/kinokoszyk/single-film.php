<?php get_header(); ?>

<section class="mx-2 md:mx-16 lg:mx-[120px]">
    <div class="breadcrumbs uppercase font-text text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
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
                <img class="my-16 object-cover w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
            <?php endif; ?>
            <section class="flex flex-row justify-between">
                <div class="max-w-[490px]">
                    <h4 class="font-header text-desktopH4"><?php the_title(); ?></h4>
                    <p class="mb-16"><?php the_field('year'); ?></p>
                    <p><?php the_field('film_description'); ?></p>
                </div>
                <div>
                    <?php if (get_field('')) : ?>
                        <p><?php the_field(''); ?></p>
                    <?php endif; ?>

                    <?php if (get_field('directors')) : ?>
                        <p class="font-bold">Directors</p>
                        <p><?php the_field('directors'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('producers')) : ?>
                        <p class="font-bold mt-10">Producers</p>
                        <p><?php the_field('producers'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('cinematography')) : ?>
                        <p class="font-bold mt-10">Cinematography</p>
                        <p><?php the_field('cinematography'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('music')) : ?>
                        <p class="font-bold mt-10">Music</p>
                        <p><?php the_field('music'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('featuring')) : ?>
                        <p class="font-bold mt-10">Featuring</p>
                        <p><?php the_field('featuring'); ?> </p>
                    <?php endif; ?>

                    <?php if (get_field('role_1')) : ?>
                        <p class="font-bold mt-10"> <?php the_field('role_1'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('role_name_1')) : ?>
                        <p><?php the_field('role_name_1'); ?></p>
                    <?php endif; ?>

                    <?php if (get_field('role_2')) : ?>
                        <p class="font-bold mt-10"><?php the_field('role_2'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('role_name_2')) : ?>
                        <p><?php the_field('role_name_2'); ?></p>
                    <?php endif; ?>

                    <?php if (get_field('role_3')) : ?>
                        <p class="font-bold mt-10"><?php the_field('role_3'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('role_name_3')) : ?>
                        <p><?php the_field('role_name_3'); ?></p>
                    <?php endif; ?>

                    <?php if (get_field('role_4')) : ?>
                        <p class="font-bold mt-10"><?php the_field('role_4'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('role_name_4')) : ?>
                        <p><?php the_field('role_name_4'); ?></p>
                    <?php endif; ?>

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