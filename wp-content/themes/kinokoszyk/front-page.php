<?php get_header(); ?>


<section class="w-11/12 mx-auto">

    <div class="hero w-full">
        <h1 id="hero-title" class="text-5xl relative font-bold h-fit
      after:content-['Koszyk'] after:absolute after:left-8 after:top-12 after:text-gray-500
      "> Kino</h1>
        <img class="w-full aspect-video bg-gray-400 shrink-0" src="" alt="">
    </div>
    <article class="cultural-entrepreneurs mt-8">

        <?php $postID = get_the_ID(); ?>
        <?php $post = get_the_content(); ?>
        <?php $blocks = parse_blocks($post); ?>
        <pre><?php print_r($blocks); ?></pre>

        <p class="mt-3"></p>
        <img class="w-full h-40 bg-gray-400 mt-8" src="" alt="">
        <div class="link-wrapper w-full h-40 flex flex-wrap mt-8">
            <a class="w-1/3 h-1/2" href=""><img class="border-2 w-full h-full" src="./foton/svg-icons/image1.svg" alt=""></a>
            <a class="w-1/3 h-1/2" href=""><img class="border-2 w-full h-full" src="./foton/svg-icons/image1.svg" alt=""></a>
            <a class="w-1/3 h-1/2" href=""><img class="border-2 w-full h-full" src="./foton/svg-icons/image1.svg" alt=""></a>
            <a class="w-1/2 h-1/2" href=""><img class="border-2 w-full h-full" src="./foton/svg-icons/image1.svg" alt=""></a>
            <a class="w-1/2 h-1/2" href=""><img class="border-2 w-full h-full" src="./foton/svg-icons/image1.svg" alt=""></a>
        </div>
    </article>
    <section>
        <h3 class="text-2xl font-bold">Joanna Helander</h3>
        <div class="facebook-wrapper w-full aspect-square bg-gray-400"></div>
    </section>
    <section>
        <h3 class="text-2xl font-bold">Bo persson</h3>
        <div class="facebook-wrapper w-full aspect-square bg-gray-400"></div>
    </section>
</section>
<?php get_footer(); ?>