<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>


		    <main class="main_container" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

<?php get_footer(); ?>
