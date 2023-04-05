<?php get_header(); ?>

<section class="mx-[120px] mb-32">
    <h1 class="font-heading font-black text-desktopH1"><?php the_title(); ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class=""><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


<?php get_footer(); ?>