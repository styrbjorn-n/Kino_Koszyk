<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="flex relative mx-2 md:mx-16 lg:mx-[120px] breadcrumbs uppercase font-text font-thin text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
        <h1 class="mt-0 uppercase font-black md:mb-16 mb-4 lg:text-desktopH1 md:text-tabletH1 text-mobileH1"><?php post_type_archive_title(); ?></h1>
        <?php if (have_posts()) : ?>


            <div class="w-full flex flex-wrap justify-start lg:gap-14 gap-1">
                <?php while (have_posts()) : the_post(); ?>

                    <?php $image = get_field('film_image');
                    if ($image) :
                        $title = $image['title'];
                        $alt = $image['alt'];
                        $size = 'large';
                        $thumb = $image['sizes'][$size]; ?>

                        <div class="flex flex-col w-[48%] lg:w-[30%] font-text mb-16">
                            <a href="<?php the_permalink(); ?>" title="<?= esc_attr($title); ?>">
                                <img class="object-cover shadow-book aspect-[8/12] w-full" src="<?= esc_url($thumb); ?>" alt="<?= esc_attr($alt);  ?>" />
                            </a>
                            <a class="font-bold text-mobileP lg:text-desktopP md:text-tabletP mt-4" href=<?php the_permalink() ?>> <?= the_title(); ?></a>
                            <p class="text-mobileP lg:text-desktopP md:text-tabletP"><?= get_field('year'); ?></p>
                        </div>

                    <?php endif; ?>
                <?php endwhile; ?>
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
    <?php endif; ?>

    </section>
    <?php get_footer(); ?>