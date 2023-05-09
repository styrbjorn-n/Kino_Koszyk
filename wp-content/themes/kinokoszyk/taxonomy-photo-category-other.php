<?php get_header();
$slug = get_last_url_slug(); ?>
<div class="flex relative mx-2 md:mx-16 lg:mx-[120px] breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>
<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <h1 class="font-black lg:text-desktopH1 md:text-tabletH1 text-mobileH1 mb-4 md:mb-16"><?php post_type_archive_title() ?></h1>
    <?php print_category_terms('photo-category', $slug) ?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();
            $image = get_field('photography');
            if ($image) :
                $title = $image['title'];
                $alt = $image['alt']; ?>
                <a href="<?php echo $image['url']; ?>" target="_blank">
                    <img class="hover:scale-110 transition duration-500 ease-in-out h-auto object-cover object-center" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </a>
            <?php endif; ?>
        <?php endwhile; ?>

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

</section>
<?php get_footer(); ?>