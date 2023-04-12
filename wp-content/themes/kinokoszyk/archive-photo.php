<?php get_header(); ?>
<div class="mx-2 md:mx-16 lg:mx-[120px] breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>
<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <h1 class="font-black lg:text-desktopH1 md:text-tabletH1 text-mobileH1 mb-4 md:mb-16"><?php post_type_archive_title() ?></h1>
    <div class="flex justify-between w-fit gap-1 mb-4 md:mb-16">
        <h3>All <span>|</span></h3>
        <h3>Portraits <span>|</span></h3>
        <h3>Writers <span>|</span></h3>
        <h3>Artists </h3>
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