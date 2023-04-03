<?php get_header(); ?>


<section class="font-heading md:mx-[120px] mx-2">

    <div class="w-full">
        <h1 id="hero-title" class="relative text-black h-fit text-5xl lg:text-9xl"> Kino
            <span class="ml-5 lg:absolute opacity-60 lg:left-10 lg:top-[7rem]">Koszyk</span>
        </h1>
        <img class="w-full aspect-video bg-gray-400 shrink-0" src="" alt="">
    </div>
    <article class="mt-16 flex flex-col md:flex-row h-fit">
        <div>
            <h2 class="text-xl font-semibold mb-3">Cultural entrepreneurs</h2>
            <p class="text-base"><?php the_field('front_page_description'); ?></p>
        </div>
        <img class="mt-3 w-full self-start basis-2/5" src="<?= get_template_directory_uri(); ?>/src/logoblack.svg" alt="">
    </article>
    <article class="link-wrapper w-full h-fit flex flex-wrap mt-8 mb-16">
        <div class="h-30 w-full flex flex-wrap">
            <a class="w-1/3 h-1/3" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image1.svg" alt=""></a>
            <a class="w-1/3 h-1/3" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image2.svg" alt=""></a>
            <a class="w-1/3 h-1/3" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image3.svg" alt=""></a>
            <a class="w-1/2 h-1/3" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image4.svg" alt=""></a>
            <a class="w-1/2 h-1/3" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image5.svg" alt=""></a>
        </div>
    </article>
    <section class="flex flex-wrap md:flex-nowrap md:gap-4">
        <section class="w-full md:basis-1/2 shrink-0">
            <h2 class="text-desktopH2 font-semibold">Joanna Helander</h2>
            <div class="facebook-wrapper w-full aspect-square bg-gray-400"></div>
        </section>
        <section class="w-full md:basis-1/2 shrink-0">
            <h2 class="text-desktopH2 font-semibold">Bo Persson</h2>
            <div class="facebook-wrapper w-full aspect-square bg-gray-400"></div>
        </section>

    </section>
</section>
<?php get_footer(); ?>