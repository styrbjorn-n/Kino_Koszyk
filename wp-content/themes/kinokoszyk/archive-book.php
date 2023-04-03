<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php the_title(); ?>
    <div>
        <!-- This is a card in the grid -->
        <?php while (have_posts()) : the_post(); ?>

            <a href=<?php the_permalink() ?>> <?= the_title(); ?> </a>
            <!-- EOF: card in the grid -->
        <?php endwhile; ?>

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
            <div class="flex flex-col lg:w-1/4 w-1/2 pr-2">
                <a href="<?php the_permalink(); ?>" title="<?= esc_attr($title); ?>">
                    <img class="object-cover aspect-[8/12] w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                </a>
                <a class="whitespace-break-spaces sm: text-mobileP lg: text-desktopP md: text-tabletP" href=<?php the_permalink() ?>> <?= the_title(); ?> </a>
            </div>

        <?php endif; ?>

        <!-- EOF: the grid -->
    <?php endif; ?>

    <?php get_footer(); ?>