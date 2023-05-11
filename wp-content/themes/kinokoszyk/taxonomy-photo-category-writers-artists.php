<?php get_header();
$slug = get_last_url_slug(); ?>
<div class="flex relative mx-2 md:mx-16 lg:mx-[120px] breadcrumbs font-text font-thin uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>
<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <h1 class="font-black lg:text-desktopH1 md:text-tabletH1 text-mobileH1 mb-4 md:mb-16">PHOTOS</h1>
    <?php print_category_terms('photo-category', $slug); ?>
    <section class="w-auto flex flex-col justify-center items-center">
        <div class="w-full masonry">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();
                    $image = get_field('photography');
                    if ($image) :
                        $title = $image['title'];
                        $alt = $image['alt']; ?>

                        <div class="lg:w-[32%] inline-block align-top overflow-hidden masonry-item md:w-[26.3%] mb-4 masonry-item">
                            <a href="<?php echo $image['url']; ?>" target="_blank" class="inset-0">
                                <img class="w-full h-auto object-cover object-center" src="<?= $image['url']; ?>" alt="<?= $image['alt']; ?>">
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </section>

    <section class="font-text flex text-desktopP flex-row justify-center">
        <div class="mx-2 mt-16 mb-28 ">
            <?php echo the_pagination(array(
                'prev_text'    => ' < ',
                'next_text'    => ' > '
            ));
            ?>
        </div>
    </section>

    </div>

</section>
<?php get_footer(); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
<script>
    var masonry = new Masonry('.masonry', {
        itemSelector: '.masonry-item',
        columnWidth: '.masonry-item',
        percentPosition: true,
        gutter: 20,
        horizontalOrder: true,
    });
    window.addEventListener('load', function() {
        masonry.layout();
    });
</script>