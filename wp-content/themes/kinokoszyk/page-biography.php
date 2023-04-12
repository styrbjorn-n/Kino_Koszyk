<?php get_header(); ?>

<section class="mx-[120px] mb-32">
    <div class="breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <h1 class="font-heading font-black text-desktopH1 mb-16"><?php the_title(); ?></h1>
    <?php
    $image = get_field('biography_image');
    if ($image) :

        $alt = $image['alt'];

        // Thumbnail size attributes.
        $size = 'large';
        $thumb = $image['sizes'][$size];
        $width = $image['sizes'][$size . '-width'];
        $height = $image['sizes'][$size . '-height']; ?>
        <img class="object-cover w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
    <?php
    endif;
    ?>
    <img src="" alt="">
    <h2 class="font-heading text-desktopH2 mt-16"><?php the_field('biography_header') ?></h2>
    <h4 class="text-desktopH4 font-bold mt-2"><?php the_field('biography_subheader') ?></h4>
    <p class="font-text mt-6 text-desktopP max-w-[712px]"><?php the_field('biography_paragraph') ?></p>


</section>

<?php get_footer(); ?>