<?php get_header(); ?>

<div class="mx-2 md:mx-16 lg:mx-[120px] breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>
<h1 class="font-black lg:mx-[120px] mb-16 mx-2 md:mx-16 font-heading text-mobileH1 lg:text-desktopH1 md:text-tabletH1"><?php post_type_archive_title() ?></h1>
<?php if (have_posts()) : ?>

    <div class="w-full flex flex-wrap justify-evenly pl-2 lg:gap-8">
        <!-- This is a card in the grid -->
        <?php while (have_posts()) : the_post();
            $posts = print_r(get_posts(array(
                'post_type'         => 'book',
                'posts_per_page'    => 12,
                'meta_key'          => 'start_date',
                'orderby'           => 'meta_value',
                'order'             => 'DESC'
            )));
        ?>
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

    <!-- EOF: the grid -->
<?php endif; ?>

<?php get_footer(); ?>