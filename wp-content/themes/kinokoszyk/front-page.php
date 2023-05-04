<?php get_header(); ?>

<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">

    <div class="w-full">
        <h1 id="hero-title" class="lg:text-desktopH1 md:text-tabletH1 max-sm:text-mobileH1 sm:text-mobileH1 font-black relative z-1"><span class="text-red-600">KINO </span><span>KOSZYK</span></h1>
        <h2 class="lg:text-desktopH2 font-semibold mb-4 md:text-4xl"> Documentary filmmakers </h2>
        <img class="w-full aspect-video bg-gray-400 shrink-0" src="<?= get_template_directory_uri(); ?>/src/hero.jpg" alt="">
    </div>
    <article class="mt-16 h-fit flex flex-col md:flex-row md:gap-4">
        <div class="max-w-[740px] mr-24">
            <h2 class="lg:text-desktopH2 font-semibold mb-4 md:text-4xl"><?php the_field('front_page_header') ?></h2>
            <p class="lg:text-desktopP md:text-xl font-text"><?php the_field('front_page_description'); ?></p>
        </div>
        <img class="w-full self-center md:w-1/2 max-md:hidden" src="<?= get_template_directory_uri(); ?>/src/logoblack.svg" alt="Kinokoszyk logo in black">
    </article>

    <!-- HÅR skA EN "ARCHIVE" GREJ IN -->

    <article class="link-wrapper w-full h-fit flex flex-wrap my-16">
        <h3 class="mb-10 font-semibold text-desktopH2">Partners</h3>
        <div class="h-30 w-full flex flex-wrap md:justify-between">

            <?php
            print_partner_items(1);
            print_partner_items(2);
            print_partner_items(3);
            print_partner_items(4);
            print_partner_items(5);
            print_partner_items(6);
            print_partner_items(7);
            print_partner_items(8);
            print_partner_items(9);
            print_partner_items(10);
            ?>

        </div>
    </article>

</section>
<?php get_footer(); ?>