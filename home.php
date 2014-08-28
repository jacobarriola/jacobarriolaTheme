<?php get_header(); ?>

<p>This is the home.php</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>
	<hr>


<?php endwhile; else: ?>

	<p>There are no posts or pages</p>

<?php endif; ?>	

<?php get_footer(); ?>