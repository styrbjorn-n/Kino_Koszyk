<?php get_header();
$slug = get_last_url_slug();
$joanna_sub_menu = wp_get_nav_menu_items('joanna-sub-menu');
$segments = get_url_segments(); ?>

<?php if (have_posts()) : ?>
    <section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
        <div class="flex relative mx-2 md:mx-16 lg:mx-[120px] breadcrumbs font-text font-thin uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
        <div class="primary-menu-list flex flex-col lg:text-desktopH2 md:text-tabletH2 text-mobileH2 md:flex-row flex-wrap items-start h-full max-md:justify-center font-semibold lg:justify-start [&>li:nth-child(2)>span]:hidden">
            <?php if ($joanna_sub_menu) foreach ($joanna_sub_menu as $link) : ?>

                <a title="<?= $link->title; ?>" class="hover:text-hover text-desktopH2 <?php active_menu_link($link->title, $segments) ?> " href="<?= $link->url; ?>"><?= $link->title; ?></a>
            <?php endforeach; ?>
        </div>
        <section class=" w-3/5 ">
            <?php while (have_posts()) : the_post(); ?>
                <?php if (strtotime(get_field('exhibition_date')) > strtotime(date('Fj,Y'))) : ?>
                    <h4 class="lg:text-desktopH4 font-text font-semibold mt-16 md:text-4xl">NEXT</h4>
                    <hr class="border-black mt-4 mb-16 border-2">

                    <article class="flex flex-row">
                        <div>
                            <h4 class="font-text lg:mr-28 lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?= get_field('exhibition_date'); ?></h4>
                        </div>

                        <div>
                            <h4 class="font-text lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?= get_field('exhibition_name'); ?></h4>
                            <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text  max-w-[712px]"><?= get_field('exhibition_location'); ?></p>
                            <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text  max-w-[712px]"><?= get_field('exhibition_description'); ?></p>
                        </div>
                    </article>
                <?php else : ?>
                    <h4 class="lg:text-desktopH4 font-text font-semibold mt-28 md:text-4xl">PAST</h4>
                    <hr class="border-black mt-4 mb-16 border-2">
                    <article class="flex flex-row">
                        <div>
                            <h4 class="font-text lg:mr-28 lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?= get_field('exhibition_date'); ?></h4>
                        </div>

                        <div>
                            <h4 class="font-text lg:text-desktopH4 md:text-tabletH4 max-md:mobileH4 font-bold"><?= get_field('exhibition_name'); ?></h4>
                            <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text  max-w-[712px]"><?= get_field('exhibition_location'); ?></p>
                            <p class="lg:text-desktopP md:text-tabletP max-md:text-mobileP font-text  max-w-[712px]"><?= get_field('exhibition_description'); ?></p>
                        </div>
                    </article>
                <?php endif; ?>
            <?php endwhile; ?>
        </section>

        <section class="font-text flex text-desktopP flex-row justify-center">
            <div class="mx-2 mt-2 mb-28 ">
                <?php echo the_pagination(array(
                    'prev_text'    => ' < ',
                    'next_text'    => ' > '
                ));
                ?>
            </div>
        </section>

    <?php endif; ?>
    </section>

    <?php get_footer(); ?>