<?php get_header(); ?>

<h1 class="font-heading text-desktopH1 mb-16">Books</h1>

<?php if (have_posts()) : ?>

    <div class="w-full flex flex-wrap justify-evenly pl-2 lg:gap-8">
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
                <div class="flex flex-col w-1/2 pr-2 lg:w-1/4">
                    <a href="<?php the_permalink(); ?>" title="<?= esc_attr($title); ?>">
                        <img class="object-cover aspect-[8/12] w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                    </a>
                    <a class="font-bold text-mobileP lg:text-desktopP md:text-tabletP" href=<?php the_permalink() ?>> <?= the_title(); ?></a>
                    <p class="text-mobileP lg:text-desktopP md:text-tabletP"><?= get_field('year'), " - ", get_field('publisher'); ?></p>
                </div>

            <?php endif; ?>

            <!-- EOF: card in the grid -->
        <?php endwhile; ?>
    </div>

    <!-- EOF: the grid -->
<?php endif; ?>

<?php get_footer(); ?>