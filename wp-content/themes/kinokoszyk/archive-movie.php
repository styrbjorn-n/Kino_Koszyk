<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="grid grid-cols-2 gap-4 p-8 max-w-7xl mx-auto">
        <!-- This is a card in the grid -->
        <?php while (have_posts()) : the_post(); ?>

            <!-- EOF: card in the grid -->
        <?php endwhile; ?>

        <!-- EOF: the grid -->
    <?php endif; ?>

    <?php get_footer(); ?>