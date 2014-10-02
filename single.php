<?php
/**
 * The template for displaying all single posts.
 *
 * @package Jacob Arriola
 */

get_header(); ?>

	<div class="container bpost-container"> 
      <article>
        <header class="text-center">

			<?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
			<span class="glyphicon glyphicon-calendar"></span> <span class="bpost-date"><?php the_date(); ?></span>
        </header>
        <section>
        	<?php the_content(); ?>

        	<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>
        </section>
       </article>
			



		<?php endwhile; // end of the loop. ?>

    </div><!-- /.container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>