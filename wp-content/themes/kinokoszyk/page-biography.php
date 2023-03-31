<?php get_header(); ?>


<?php print_a(attachment_url_to_postid('http://kino.local/wp-content/uploads/2023/03/DsdXNeUxu8NOX57Ji1u7-4-6v3wt.jpg'));  ?>
<!-- <img src="<?= $image = wp_get_attachment_image(1021); ?>" alt="" class="w-[1272px] h-[600px]" /> -->


<section class="mx-[120px] mb-32">
    <h1 class="font-heading text-desktopH1"><?php the_title(); ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class=""><?php the_content(); ?></div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


<?php get_footer(); ?>