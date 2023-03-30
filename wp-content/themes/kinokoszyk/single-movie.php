<?php get_header(); ?>


<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

        <h2 class="text-4xl"><?php the_title(); ?></h2>

        <p class="text-xl"> <?php the_content(); ?> </p>

        <div>
            <img src="<?php the_post_thumbnail('large', array('class' => "object-cover w-50 h-full")); ?>" />
            <date>
            </date>
        </div>

    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>