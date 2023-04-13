<?php get_header(); ?>
<div class="mx-2 md:mx-16 lg:mx-[120px] breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>
<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <h1 class="font-black lg:text-desktopH1 md:text-tabletH1 text-mobileH1 mb-4 md:mb-16"><?php post_type_archive_title() ?></h1>
    <div class="flex justify-between w-fit gap-1 mb-4 md:mb-16">
        <h3><a href="/joanna-helander/photos/">All </a><span>|</span></h3>
        <h3><a href="/joanna-helander/photos/motives">Portraits</a> <span>|</span></h3>
        <h3><a href="/joanna-helander/photos/writers">Writers</a> <span>|</span></h3>
        <h3><a href="/joanna-helander/photos/artists">Artists</a> </h3>
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
                    <div class="card flex flex-col w-[49%] lg:w-[32%] shrink-0 mb-3 md:mb-20">
                        <img class="gallery-img object-cover aspect-[8/12] w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" onclick="open()" />
                        <h3 class="font-bold text-mobileP lg:text-desktopP md:text-tabletP"> <?= the_title(); ?></h3>
                        <p class="text-mobileP lg:text-desktopP md:text-tabletP"><?= get_field('year'); ?></p>
                    </div>

                <?php endif; ?>

                <!-- EOF: card in the grid -->
            <?php endwhile; ?>

            <!-- EOF: the grid -->
        </div>
    <?php endif; ?>
    </div>
    <div id="imgOverlay" class="bg-black bg-opacity-30 bg-cover w-full h-full absolute top-0 left-[-300%] bottom-0 right-0 mx-auto my-[25%]">
        <div class="realtive w-10/12 aspect-video bg-black bg-opacity-40 mx-auto flex-col flex">
            <div class="w-full h-full  shrink-1 flex justify-center">
                <img id="displayImg" class="max-w-full max-h-full" src="" alt="">
            </div>
            <div class="text-white flex flex-nowrap justify-around w-full h-16 gap-1 px-1">
                <button id="prev" class="order-first" data-move="-1" onclick="findCurrnetIndex(this)">prev</button>
                <div id="imgWrapper" class="flex flex-nowrap justify-between w-full h-full">
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
                            <img class="bottom-img w-[12%] aspect-square" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" onclick="clickToCange(this)" />
                        <?php endif; ?>

                        <!-- EOF: card in the grid -->
                    <?php endwhile; ?>
                </div>
                <button id="next" class="order-last" data-move="1" onclick="findCurrnetIndex(this)">next</button>
            </div>
            <h2 class="font-sans absolute top-[-10px] right-0 text-6xl">X</h2>
        </div>
</section>
<?php get_footer(); ?>