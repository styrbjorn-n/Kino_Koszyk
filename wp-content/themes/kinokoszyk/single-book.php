<?php get_header(); ?>


<?php
$fields = get_field_objects(); ?>


<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h2 class="text-4xl"><?php the_title(); ?></h2>

        <p class="text-xl"> <?php the_content(); ?> </p>


    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>