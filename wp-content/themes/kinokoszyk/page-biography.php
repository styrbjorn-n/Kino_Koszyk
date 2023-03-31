<?php get_header(); ?>




<section class="mx-[120px] mb-32">
    <h1 class="font-heading text-desktopH1"><?php the_title(); ?></h1>
    <!-- <img src="<?= $image = wp_get_attachment_image(1021); ?>" alt="" class="w-[1272px] h-[600px]" /> -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class=""><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


<?php get_footer(); ?>