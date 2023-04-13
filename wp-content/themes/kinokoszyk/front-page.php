<?php get_header(); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v16.0" nonce="l6ftm9fT"></script>


<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">

    <div class="w-full">
        <h1 id="hero-title" class="lg:text-desktopH1 md:text-tabletH1 max-sm:text-mobileH1 sm:text-mobileH1 font-black relative z-1 max-sm:-mb-[4px] sm:-mb-[4px] md:-mb-[8px] lg:-mb-[11px]"> KINO KOSZYK </h1>
        <img class="w-full aspect-video bg-gray-400 shrink-0" src="<?= get_template_directory_uri(); ?>/src/hero.jpg" alt="">
    </div>
    <article class="mt-16 h-fit flex flex-col md:flex-row md:gap-4">
        <div class="max-w-[740px] mr-24">
            <h2 class="lg:text-desktopH2 font-semibold mb-4 md:text-4xl"><?php the_field('front_page_header') ?></h2>
            <p class="lg:text-desktopP md:text-xl"><?php the_field('front_page_description'); ?></p>
        </div>
        <img class="w-full self-center md:w-1/2 max-md:hidden" src="<?= get_template_directory_uri(); ?>/src/logoblack.svg" alt="Kinokoszyk logo in black">
    </article>
    <article class="link-wrapper w-full h-fit flex flex-wrap my-16">
        <h3 class="mb-10 font-semibold text-desktopH2">Our collaborations</h3>
        <div class="h-30 w-full flex flex-wrap md:justify-between">
            <a class="w-1/3 h-1/3 md:w-1/6 md:h-full" href="https://omoss.svt.se/about-svt.html"><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image1.svg" alt="logo for Sveriges television."></a>
            <a class="w-1/3 h-1/3 md:w-1/6 md:h-full" href="https://www.filminstitutet.se/en/about-us/swedish-film-institute/"><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image2.svg" alt="logo for Svenska filminstitutet."></a>
            <a class="w-1/3 h-1/3 md:w-1/6 md:h-full" href="https://www.arte.tv/sites/corporate/en/what-we-do/"><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image3.svg" alt="logo for Arte."></a>
            <a class="w-1/2 h-1/3 md:w-1/6 md:h-full" href="https://arscameralis.pl/en/"><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image4.svg" alt="logo for for The Cultural Institution Ars Cameralis."></a>
            <a class="w-1/2 h-1/3 md:w-1/6 md:h-full" href="https://filmivast.se/"><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image5.svg" alt="logo for Film i väst."></a>
        </div>
    </article>
    <section>
        <h3 class="text-desktopH3 font-text font-light mb-4">Follow us on Facebook for all the latest news!</h3>
        <div>
            <div class="flex flex-wrap justify-around md:flex-nowrap md:gap-4 lg:justify-around">
                <section class="w-full md:w-1/2 lg:w-[500px] shrink-1 md:shrink-0 basis-1/2 max-md:mb-4">
                    <h2 class="text-3xl md:text-4xl lg:text-desktopH2 font-semibold mb-2">Joanna Helander</h2>
                    <div class="fb-page facebook-wrapper w-full aspect-square" data-href="https://www.facebook.com/kinokoszyk/" data-tabs="timeline" data-width="800" data-height="600" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/kinokoszyk/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kinokoszyk/">Kino Koszyk - Joanna Helander &amp; Bo Persson</a></blockquote>
                    </div>
                </section>
                <section class="w-full md:w-1/2 lg:w-[500px] shrink-1 md:shrink-0 basis-1/2">
                    <h2 class="text-3xl lg:text-desktopH2 font-semibold mb-2">Bo Persson</h2>
                    <div class="fb-page facebook-wrapper w-full aspect-square" data-href="https://www.facebook.com/kinokoszyk/" data-tabs="timeline" data-width="800" data-height="600" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/kinokoszyk/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kinokoszyk/">Kino Koszyk - Joanna Helander &amp; Bo Persson</a></blockquote>
                    </div>
            </div>
    </section>
    </div>


</section>
</section>
<?php get_footer(); ?>