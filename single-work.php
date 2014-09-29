<?php get_header(); ?>

	<div class="container bpost-container"> 
        <article class="col-sm-7 col-md-9">
	        <header class="text-center">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<span class="glyphicon glyphicon-calendar"></span> <span class="bpost-date"><?php the_date(); ?></span>
	        </header>
	        <section>
	        	<?php the_field( 'description' ); ?>
	        </section>

	        	<?php endwhile; else: ?>

				<p>There are no posts or pages here</p>

				<?php endif; // end of the loop. ?>
        </article>

        <aside class="col-sm-5 col-md-3">

        	<p>This is the sidebar.</p>


        </aside>
			



    </div><!-- /.container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>