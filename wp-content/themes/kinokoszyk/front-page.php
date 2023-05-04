<?php get_header(); ?>
<div id="fb-root"></div>

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
    <article class="link-wrapper w-full h-fit flex flex-wrap my-16">
        <h3 class="mb-10 font-semibold text-desktopH2">Partners</h3>
        <div class="h-30 w-full flex flex-wrap md:justify-between">
            <a class="w-1/3 h-1/3 md:w-1/6 md:h-full" href="https://omoss.svt.se/about-svt.html"><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image1.svg" alt="logo for Sveriges television."></a>
            <a class="w-1/3 h-1/3 md:w-1/6 md:h-full" href="https://www.filminstitutet.se/en/about-us/swedish-film-institute/"><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image2.svg" alt="logo for Svenska filminstitutet."></a>
            <a class="w-1/3 h-1/3 md:w-1/6 md:h-full" href="https://www.arte.tv/sites/corporate/en/what-we-do/"><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image3.svg" alt="logo for Arte."></a>
            <a class="w-1/2 h-1/3 md:w-1/6 md:h-full" href="https://arscameralis.pl/en/"><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image4.svg" alt="logo for for The Cultural Institution Ars Cameralis."></a>
            <a class="w-1/2 h-1/3 md:w-1/6 md:h-full" href="https://filmivast.se/"><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image5.svg" alt="logo for Film i väst."></a>
        </div>
    </article>

</section>
<?php get_footer(); ?>