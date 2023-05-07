<?php get_header(); ?>

<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <div class="w-full">
        <h1 id="hero-title" class="lg:text-desktopH1 md:text-tabletH1 max-sm:text-mobileH1 sm:text-mobileH1 font-black relative z-1"><span class="text-red-600">KINO </span><span>KOSZYK</span></h1>
        <h2 class="lg:text-desktopH2 font-semibold mb-4 md:text-4xl"> Documentary filmmakers </h2>
        <img class="w-full aspect-video bg-gray-400 shrink-0" src="<?= get_template_directory_uri(); ?>/src/hero.jpg" alt="">
    </div>

    <article class="mt-16 h-fit flex flex-col md:flex-row md:gap-4">
        <div class="max-w-[740px] mr-24">
            <h2 class="lg:text-desktopH2 font-semibold mb-4 md:text-4xl"><?php the_field('front_page_header') ?></h2>
            <p class="lg:text-desktopP md:text-xl font-text"><?php the_field('front_page_description'); ?></p>
        </div>
        <img class="w-full self-center md:w-1/2 max-md:hidden" src="<?= get_template_directory_uri(); ?>/src/logoblack.svg" alt="Kinokoszyk logo in black">
    </article>

    <!-- ARCHIVE ITEM POST ON THE FRONT-PAGE.PHP -->
    <article>
        <h2 class="lg:text-desktopH2 font-semibold my-4 md:text-4xl">Archive</h2>
        <div class="flex flex-row">

            <?php
            $args = array(
                'post_type' => 'archive',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $archive_item_query = new WP_Query($args);

            if ($archive_item_query->have_posts()) :
                while ($archive_item_query->have_posts()) : $archive_item_query->the_post(); ?>
                    <div class="basis-1/2">
                        <h4 class="font-text lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?= the_title(); ?></h4>
                        <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text max-w-[712px]"><b><?php the_field('archive_item_year'); ?></b></p>
                        <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text  max-w-[712px]"><?= wp_trim_words(get_field('archive_item_paragraph'), 35); ?></p>
                        <a href="<?= get_post_type_archive_link('custom-archive'); ?>"><button class="bg-buttonRed px-2 h-11 text-white">Read more</button></a>

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

                <?php endif;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
                    </div>
        </div>
    </article>


    <article class="link-wrapper w-full h-fit flex flex-wrap my-16">
        <h3 class="mb-10 font-semibold text-desktopH2">Our partners</h3>
        <div class="h-30 w-full flex flex-wrap md:justify-between">

            <?php
            print_partner_items(1);
            print_partner_items(2);
            print_partner_items(3);
            print_partner_items(4);
            print_partner_items(5);
            print_partner_items(6);
            print_partner_items(7);
            print_partner_items(8);
            print_partner_items(9);
            print_partner_items(10);
            ?>

        </div>
    </article>

</section>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>