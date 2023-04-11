<?php get_header(); ?>
<div class="breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>
<?php if (have_posts()) : ?>
    <div>
        <!-- This is a card in the grid -->
        <?php while (have_posts()) : the_post(); ?>

            <?php
            $image = get_field('photography');
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
                <div class="card flex flex-col w-[49%] lg:w-1/4 shrink-0 mb-3 md:mb-20">
                    <a href="<?php the_permalink(); ?>" title="<?= esc_attr($title); ?>">
                        <img class="object-cover aspect-[8/12] w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                    </a>
                    <a class="font-bold text-mobileP lg:text-desktopP md:text-tabletP" href=<?php the_permalink() ?>> <?= the_title(); ?></a>
                    <p class="text-mobileP lg:text-desktopP md:text-tabletP"><?= get_field('year'); ?></p>
                </div>

            <?php endif; ?>

            <!-- EOF: card in the grid -->
        <?php endwhile; ?>

        <!-- EOF: the grid -->
    </div>
<?php endif; ?>
</section>
<?php get_footer(); ?>