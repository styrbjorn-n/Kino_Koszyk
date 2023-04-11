<?php get_header(); ?>
<section>
    <h1 class="lg:text-desktopH1 md:text-tabletH1 text-mobileH1 mb-4 md:mb-16">Photos</h1>
    <div class="flex justify-between w-fit gap-1 mb-4 md:mb-16">
        <h3 class="">All <span>|</span></h3>
        <h3 class="">Portraits <span>|</span></h3>
        <h3 class="">Writers <span>|</span></h3>
        <h3 class="">Artists </h3>
    </div>
    <?php if (have_posts()) : ?>
        <div class="flex flex-wrap justify-between w-full">
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