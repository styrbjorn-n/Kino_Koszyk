<?php get_header(); ?>

<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <div class="w-full">
        <h1 id="hero-title" class="flex flex-col font-black text- lg:flex-row lg:text-desktopH1 md:text-tabletH1 text-6xl relative z-1"><span class="font-heading uppercase mr-4 md:mr-8 lg:mr-8">Joanna</span><span class="uppercase">Helander</span></h1>

        <h2 class="font-text md:font-heading lg:text-desktopH2 md:text-tabletH2 text-mobileH4 font-semibold md:mb-4 lg:mb-4"><?php the_field('front_page_header') ?></h2>

        <img class="w-full aspect-video bg-gray-400 shrink-0 mt-0" src="<?= get_template_directory_uri(); ?>/src/page-joanna-helander.png" alt="Woman in industial area with wind in her hair">
    </div>

    <article class="mt-16 h-fit flex flex-col md:flex-row md:gap-4">
        <div class="max-w-[740px] mr-24">
            <p class="font-text lg:text-desktopP font-text md:text-xl"><?php the_field('front_page_description'); ?></p>
        </div>
    </article>

    <article>
        <h2 class="lg:text-desktopH2 font-semibold my-4 md:text-4xl text-mobileH2">Next Exhibition/latest exhibition</h2>
        <div class="flex flex-row">

            <?php
            $args = array(
                'post_type' => 'exhibitions',
                'posts_per_page' => 1,
                'orderby' => 'date',
                'order' => 'DESC',
            );

            $exhibition_item_query = new WP_Query($args);

            if ($exhibition_item_query->have_posts()) :
                while ($exhibition_item_query->have_posts()) : $exhibition_item_query->the_post();
            ?>
                    <div class="flex flex-row">
                        <div>
                            <h4 class="font-text lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?= get_field('exhibition_year'); ?></h4>
                        </div>
                        <div>

                            <h4 class="font-text lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?= get_field('exhibition_name'); ?></h4>
                            <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text  max-w-[712px]"><?= get_field('exhibition_location'); ?></p>

                            <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text max-w-[712px]"><?= get_field('exhibition_description'); ?></p>
                        </div>
                    </div>

            <?php
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>
        </div>
    </article>

    <article class="link-wrapper w-full h-fit flex flex-wrap my-16">
        <h3 class="mb-10 font-semibold text-desktopH2">Partners</h3>
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
<?php get_footer(); ?>