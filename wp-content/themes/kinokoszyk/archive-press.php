<?php get_header();
$slug = get_last_url_slug();
$joanna_sub_menu = wp_get_nav_menu_items('joanna-sub-menu');
$segments = get_url_segments();

?>

<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
    <div class="flex relative breadcrumbs font-text uppercase text-grey lg:text-desktopLink md:text-tabletLink sm:text-mobileLink" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        } ?>
    </div>
    <div class="primary-menu-list flex flex-col text-mobileH2 md:text-tabletH2 lg:text-desktopH2 md:flex-row flex-wrap items-start h-full max-md:justify-center font-bold lg:justify-start gap-4 [&>li:nth-child(2)>span]:hidden">
        <?php if ($joanna_sub_menu) foreach ($joanna_sub_menu as $link) : ?>

            <a title="<?= $link->title; ?>" class="hover:text-hover <?php active_menu_link($link->title, $segments) ?> " href="<?= $link->url; ?>"><?= strtoupper($link->title); ?></a>
        <?php endforeach; ?>
    </div>

    <section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">
        <div class="">
            <?php while (have_posts()) : the_post(); ?>
                <h2><?= the_title(); ?></h2>
                <h3><?= get_field('press_item_year'); ?></h3>
                <h3><?= get_field('press_item_description'); ?></h3>
                <a href="<?= the_field('press_item_link'); ?>"><button class="bg-buttonRed px-2 h-11 text-white">Read here </button class=""></a>
                <!-- press LINK -->
            <?php endwhile; ?>
        </div>


        <section class="font-text flex text-desktopP flex-row justify-center">
            <div class="mx-2 mt-2 mb-28 ">
                <?php echo the_pagination(array(
                    'prev_text'    => ' < ',
                    'next_text'    => ' > '
                ));
                ?>
            </div>
        </section>
    </section>
</section>
<?php get_footer(); ?>