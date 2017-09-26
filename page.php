<?php get_header(); ?>

    <div class="site_container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php get_template_part('parts/loop', 'page'); ?>

        <?php endwhile; endif; ?>
    </div>

<?php get_footer(); ?>