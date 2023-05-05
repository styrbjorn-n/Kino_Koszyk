<?php get_header();
$slug = get_last_url_slug();
?>
<div class="flex relative mx-2 md:mx-16 lg:mx-[120px] breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>
<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <h1 class="font-black lg:text-desktopH1 md:text-tabletH1 text-mobileH1 mb-4 md:mb-16">Photos</h1>


    <?php print_category_terms('photo-category', $slug) ?>
    <!-- <h3><a class="font-bold text-secondary" href="/joanna-helander/photos/">All </a><span>|</span></h3>
        <h3><a href="/joanna-helander/photos/motives">Portraits</a> <span>|</span></h3>
        <h3><a href="/joanna-helander/photos/writers">Writers</a> <span>|</span></h3>
        <h3><a href="/joanna-helander/photos/artists">Artists</a> </h3>
        <h3><a href="/joanna-helander/photos/artists">Artists</a> </h3> -->
    </div>

    <?php if (have_posts()) : ?>
        <div class="w-full flex flex-wrap justify-start lg:gap-14 gap-1">
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
                    <div class="card flex flex-col w-[48%] lg:w-[30%] shrink-0 mb-3 md:mb-20 cursor-pointer">
                        <img class="gallery-img object-cover aspect-square w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" onclick="openDisplay(this)" />
                        <h3 class="font-bold text-mobileP lg:text-desktopP md:text-tabletP"> <?= the_title(); ?></h3>
                        <p class="text-mobileP lg:text-desktopP md:text-tabletP"><?= get_field('year'); ?></p>
                    </div>

                <?php endif; ?>

                <!-- EOF: card in the grid -->
            <?php endwhile; ?>

            <!-- EOF: the grid -->
        </div>
        <section class="font-text flex text-desktopP flex-row justify-center">
            <div class="mx-2 mt-16 mb-28 ">
                <?php echo the_pagination(array(
                    'prev_text'    => ' < ',
                    'next_text'    => ' > '
                ));
                ?>
            </div>
        </section>
    <?php endif; ?>
    </div>
    <div id="imgOverlay" class="bg-black bg-opacity-60 bg-cover w-full h-[120vh] sm:h-[140vh] md:h-[200vh] lg:h-[182vh] absolute top-0 left-[-300%] bottom-0 right-0 mx-auto"">
        <div class=" mt-[85%] md:mt-[75%] lg:mt-[50%]">
        <div class="realtive w-full md:w-11/12 lg:w-10/12 aspect-video mx-auto flex-col flex">
            <div class="w-full h-full bg-black shrink-1 flex justify-center">
                <img id="displayImg" class="max-w-full max-h-full" src="" alt="">
            </div>
            <div class="text-white flex flex-nowrap w-full h-10 md:h-16 gap-2 md:gap-5 px-1 md:px-5">
                <button id="prev" class="order-first text-6xl" data-move="-1" onclick="findCurrnetIndex(this)">&#x2190;</button>
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
                            <img class="bottom-img dm:w-[12%] aspect-square cursor-pointer" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" onclick="clickToCange(this)" />
                        <?php endif; ?>

                        <!-- EOF: card in the grid -->

                    <?php endwhile; ?>
                </div>

                <button id="next" class="order-last text-6xl" data-move="1" onclick="findCurrnetIndex(this)">&#x2192;</button>
            </div>
            <h2 class="font-sans absolute right-1 lg:right-20 md:right-8 top-[16rem] md:top-[34rem] lg:top-[44.5rem] text-6xl cursor-pointer" onclick="closeDisplay()">X</h2>
        </div>
    </div>

</section>
<?php get_footer(); ?>