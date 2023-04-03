<?php get_header(); ?>


<section class="font-heading md:mx-[120px] overflow-hidden">

    <div class="w-full">
        <h1 id="hero-title" class="relative text-black h-fit md:text-desktopH1
      after:content-['Koszyk'] after:absolute color-grayshade after:left-10 lg:after:top-[7rem]
      "> Kino</h1>
        <img class="w-full aspect-video bg-gray-400 shrink-0" src="" alt="">
    </div>
    <article class="mt-16 flex flex-row h-96 hidden">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="flex flex-col basis-3/5 mr-8"><?php the_content(); ?></div>
                <img class="w-full self-start basis-2/5" src="<?= get_template_directory_uri(); ?>/src/logoblack.svg" alt="">

            <?php endwhile; ?>
        <?php endif; ?>
    </article>
    <article class="link-wrapper w-full h-40 flex flex-wrap mt-8 mb-16">
        <h2 class="w-full h-1/3 text-desktopH2 font-semibold mb-8">Our collaborations</h2>
        <a class="w-1/3 h-1/3" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image1.svg" alt=""></a>
        <a class="w-1/3 h-1/3" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image2.svg" alt=""></a>
        <a class="w-1/3 h-1/3" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image3.svg" alt=""></a>
        <a class="w-1/2 h-1/3" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image4.svg" alt=""></a>
        <a class="w-1/2 h-1/3" href=""><img class="w-full h-full" src="<?= get_template_directory_uri(); ?>/src/svg-icons/image5.svg" alt=""></a>
    </article>
    <section class="flex md:gap-4">
        <section class="basis-1/2 ">
            <h2 class="text-desktopH2 font-semibold">Joanna Helander</h2>
            <div class="facebook-wrapper w-full aspect-square bg-gray-400"></div>
        </section>
        <section class="basis-1/2 ">
            <h2 class="text-desktopH2 font-semibold">Bo Persson</h2>
            <div class="facebook-wrapper w-full aspect-square bg-gray-400"></div>
        </section>

    </section>
</section>
<?php get_footer(); ?>