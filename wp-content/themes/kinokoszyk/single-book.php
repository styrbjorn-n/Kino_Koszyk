<?php get_header(); ?>

<div class="breadcrumbs uppercase font-text text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>

<section class="mx-2 md:mx-16 lg:mx-[120px]">

    <h1 class="font-black font-heading lg:mb-16 text-mobileH1 lg:text-desktopH1 md:text-tabletH1">Books</h1>

    <section class="flex flex-row justify-between ">
        <div class="basis-1/2 max-w-[490px] text-desktopP font-text">

            <h4 class="font-header text-desktopH4"><?php the_title(); ?></h4>
            <p><?php the_field('year'); ?></p>
            <p><?php the_field('available_languages'); ?></p>
            <p><?php the_field('writer'); ?></p>

            <p class="mt-8"><?php the_field('publisher'); ?></p>
            <p class="inline">ISBN: </p>
            <p class="inline font-bold"> <?php the_field('isbn'); ?></p>

            <p class="mt-16"><?php the_field('book_description'); ?></p>
        </div>

        <div class="basis-1/2">
            <?php
            $image = get_field('book_image');
            if ($image) :

                $alt = $image['alt'];

                // Thumbnail size attributes.
                $size = 'large';
                $thumb = $image['sizes'][$size];
                $width = $image['sizes'][$size . '-width'];
                $height = $image['sizes'][$size . '-height']; ?>
                <img class="object-cover w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
            <?php endif; ?>
        </div>
    </section>
</section>
<?php get_footer(); ?>