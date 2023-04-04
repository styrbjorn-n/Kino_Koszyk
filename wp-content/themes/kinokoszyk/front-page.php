<?php get_header(); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v16.0" nonce="l6ftm9fT"></script>


<section class="font-heading mx-2 md:mx-16 lg:mx-[120px]">

    <div class="w-full">
        <h1 id="hero-title" class="relative text-black h-fit text-5xl lg:text-9xl"> Kino
            <span class="ml-5 lg:absolute text-gray-600 lg:left-10 lg:top-[7rem]">Koszyk</span>
        </h1>
        <img class="w-full aspect-video bg-gray-400 shrink-0" src="" alt="">
    </div>
    <article class="mt-16 h-fit flex flex-col md:flex-row md:gap-4">
        <div>
            <h2 class="text-xl font-semibold mb-3 md:text-4xl">Cultural entrepreneurs</h2>
            <p class="text-base md:text-xl"><?php the_field('front_page_description'); ?></p>
        </div>
        <img class="mt-3 w-full self-start md:w-1/2" src="<?= get_template_directory_uri(); ?>/src/logoblack.svg" alt="">
    </article>
    <article class="link-wrapper w-full h-fit flex flex-wrap mt-8 mb-16">
        <h3 class="mb-10 text-4xl">Our collaborations</h3>
        <div class="h-30 w-full flex flex-wrap md:justify-between">
            <a class="w-1/3 h-1/3 md:w-1/6 md:h-full" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image1.svg" alt=""></a>
            <a class="w-1/3 h-1/3 md:w-1/6 md:h-full" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image2.svg" alt=""></a>
            <a class="w-1/3 h-1/3 md:w-1/6 md:h-full" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image3.svg" alt=""></a>
            <a class="w-1/2 h-1/3 md:w-1/6 md:h-full" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image4.svg" alt=""></a>
            <a class="w-1/2 h-1/3 md:w-1/6 md:h-full" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image5.svg" alt=""></a>
        </div>
    </article>
    <section>
        <h3 class="text-2xl mb-4">For further news follow us on Facebook!</h3>
        <div class="flex flex-wrap justify-center md:flex-nowrap md:gap-4 lg:justify-around">
            <section class="w-full md:w-1/2 lg:w-[500px] shrink-1 md:shrink-0">
                <h2 class="text-3xl md:text-4xl lg:text-desktopH2 font-semibold">Joanna Helander</h2>
                <div class="fb-page facebook-wrapper w-full aspect-square" data-href="https://www.facebook.com/kinokoszyk/" data-tabs="timeline" data-width="1000" data-height="600" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/kinokoszyk/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kinokoszyk/">Kino Koszyk - Joanna Helander &amp; Bo Persson</a></blockquote>
                </div>
            </section>
            <section class="w-full md:w-1/2 lg:w-[500px] shrink-1 md:shrink-0">
                <h2 class="text-3xl lg:text-desktopH2 font-semibold">Bo Persson</h2>
                <div class="fb-page facebook-wrapper w-full aspect-square" data-href="https://www.facebook.com/kinokoszyk/" data-tabs="timeline" data-width="1000" data-height="600" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/kinokoszyk/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/kinokoszyk/">Kino Koszyk - Joanna Helander &amp; Bo Persson</a></blockquote>
                </div>
            </section>
        </div>


    </section>
</section>
<?php get_footer(); ?>