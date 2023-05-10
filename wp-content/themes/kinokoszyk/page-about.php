<?php get_header(); ?>

<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <div class="flex relative breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1 class="font-heading uppercase font-black mb-16 lg:text-desktopH1 md:text-tabletH1 max-md:mb-4 text-mobileH1"><?php the_title(); ?></h1>
            <section class="flex flex-row">
                <div>
                    <h2 class="mt-16 mb-6 font-heading text-desktopH2"><?php the_field('kino_koszyk_header') ?></h2>
                    <p class="mb-16 font-text text-desktopP max-w-[712px] lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 max-md:mt-4 lg:text-desktopH4 md:text-tabletH4 max-md:text-mobileH4 lg:text-desktopP md:text-tabletP max-md:text-mobileP sm:mt-2"><?php the_field('kino_koszyk_description'); ?></p>

                </div>
                <div>
                    <div class="w-full h-full max-md:mt-4">
                        <?php
                        $image = get_field('about_image_1');
                        if ($image) {

                            $title = $image['title'];
                            $alt = $image['alt'];

                            $size = 'large';
                            $thumb = $image['sizes'][$size];
                        };
                        ?>
                        <img class="object-fill w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                        <?php
                        $image = get_field('about_image_2');
                        if ($image) {

                            $title = $image['title'];
                            $alt = $image['alt'];

                            $size = 'large';
                            $thumb = $image['sizes'][$size];
                        };
                        ?>
                        <img class="object-fill w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                    </div>
                </div>


            </section>
            <section class="flex flex-row">

                <div>
                    <h2 class="mb-1 font-heading lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 font-semibold"><?php the_field('bo_persson_header') ?></h2>
                    <h4 class="mb-6 font-text lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?php the_field('bo_persson_subheader') ?></h4>
                    <?php
                    $image = get_field('bo_persson_image');
                    if ($image) {

                        $title = $image['title'];
                        $alt = $image['alt'];

                        $size = 'large';
                        $thumb = $image['sizes'][$size];
                    };
                    ?>
                    <img class="object-fill w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                    <p class="mb-16 font-text text-desktopP max-w-[712px] lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 max-md:mt-4 lg:text-desktopH4 md:text-tabletH4 max-md:text-mobileH4 lg:text-desktopP md:text-tabletP max-md:text-mobileP sm:mt-2"><?php the_field('bo_persson_description') ?></p>
                </div>
                <div>
                    <h2 class="mb-1 font-heading lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 font-semibold"><?php the_field('joanna_helander_header') ?></h2>
                    <h4 class="mb-6 font-text lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?php the_field('joanna_helander_subheader') ?></h4>
                    <?php
                    $image = get_field('joanna_helander_image');
                    if ($image) {

                        $title = $image['title'];
                        $alt = $image['alt'];

                        $size = 'large';
                        $thumb = $image['sizes'][$size];
                    };
                    ?>
                    <img class="object-fill w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                    <p class="mb-16 font-text text-desktopP max-w-[712px] lg:text-desktopH2 md:text-tabletH2 max-md:text-mobileH2 max-md:mt-4 lg:text-desktopH4 md:text-tabletH4 max-md:text-mobileH4 lg:text-desktopP md:text-tabletP max-md:text-mobileP sm:mt-2"><?php the_field('joanna_helander_description') ?></p>
                    <a href="<?php echo get_page_link(1004); ?>"><button class="mt-2 text-center bg-buttonRed px-2 h-8 w-flex-grow text-white font-text">Read more about Joanna</button></a>

                </div>
            </section>

        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>