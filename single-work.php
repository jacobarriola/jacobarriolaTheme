<?php get_header(); ?>

		<div class="single-work">
			<?php //start the loop 

			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	        <article class="col-sm-8 col-md-9">
		        <header class="">
					<h1><?php the_title(); ?></h1>
				
					<?php
					//Display custom taxonmy for work posts
					$terms = get_the_terms( $post->ID, 'work_type' );
											
					if ( $terms && ! is_wp_error( $terms ) ) : 

						$work_links = array();

						foreach ( $terms as $term ) {
							$work_links[] = $term->name;
						}
											
						$on_work_type = join( ", ", $work_links );
					?>

					<p class="project-taxonomy-single">
						<span><?php echo $on_work_type; ?></span>
					</p>

					<?php endif; ?>

		        </header>
		        <section>
		        	<?php 

          			$image =  get_field( 'image' ); 

          			if ( !empty($image) ): ?>

          				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />

          			<?php endif; ?>	
		        </section>


	        </article>

	        <aside class="col-sm-4 col-md-3">

	        	<h2>About This Project</h2>
	        	<p class="project-description"><?php the_field( 'description' ); ?></p>
	        	<p>Published on: <?php the_date(); ?></p> 

	        	<h2>Project Tags</h2>
	        	<?php // get project tags
	        	echo get_the_tag_list('<p>',', ','</p>');
	        	?>

	        	<h2>Links</h2>
	        	<p>
	        		<img src="<?php bloginfo('template_directory'); ?>/img/github.png" width="18" height="18" /><a href="<?php the_field( 'url_github' ); ?>">  View on GitHub →</a>
	        	</p>

	        	<?php // verify field is not empty 
	        	if( get_field('url') ): ?>
					<p>
						<span class="glyphicon glyphicon-search"></span><a href="<?php the_field('url'); ?>" /> View project in web →</a>
					</p>
				<?php endif; ?>

	        </aside>
			
			<?php endwhile; else: ?>

			<p>There are no posts or pages here</p>

			<?php endif; // end of the loop. ?>
    	</div>




<?php get_sidebar(); ?>
<?php get_footer(); ?>