<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php the_title(); ?>
    <div>
        <!-- This is a card in the grid -->
        <?php while (have_posts()) : the_post(); ?>

            <a href=<?php the_permalink() ?>> <?= the_title(); ?> </a>
            <!-- EOF: card in the grid -->
        <?php endwhile; ?>

        <!-- EOF: the grid -->
    <?php endif; ?>

    <?php get_footer(); ?>