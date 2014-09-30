<?php 

/*

	Template Name:  Work Page

*/



get_header(); ?>





		<?php 

			$args = array(
				'post_type' => 'work'
				);
			$the_query = new WP_Query( $args );

		?>

		<?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

		<div class="col-sm-6 col-md-6">
			<article class="entry">
              	<header>
              		<div class="work-post-image">
              			<?php 

              			$image =  get_field( 'image' ); 

              			if ( !empty($image) ): ?>

              				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive" />

              			<?php endif; ?>	
                		
                	</div>
					<h2><a href="<?php the_permalink() ;?>"><?php the_title(); ?></a></h2>
				</header>

				<section>
					<?php
					//Display custom taxonmy for work posts
					$terms = get_the_terms( $post->ID, 'work_type' );
											
					if ( $terms && ! is_wp_error( $terms ) ) : 

						$work_links = array();

						foreach ( $terms as $term ) {
							$work_links[] = $term->name;
						}
											
						$on_work_type = join( " &middot; ", $work_links );
					?>

					<p class="">
						<span><?php echo $on_work_type; ?></span>
					</p>

					<?php endif; ?>
				</section>

			</article>	
		</div>

		<?php endwhile; else: ?>

			<p>There are no posts or pages</p>

		<?php endif; ?>	

<?php get_footer(); ?>