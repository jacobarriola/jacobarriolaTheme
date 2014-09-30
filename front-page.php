<?php get_header(); ?>

<div class="home-headline">

    <img src="<?php bloginfo('template_directory'); ?>/img/jacob.JPG" class="img-circle" />

    <h1>Jacob Arriola</h1>
    <span class="lead"><?php bloginfo('description'); ?></span>

</div> <!-- end home-headline -->



        <div class="col-md-7 latest-posts">
        	<?php 

        	$latest_blog_posts = new WP_Query( array( 'posts_per_page' => 2 ) );

			if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_post(); ?>

    			<article>
                    <header>
      					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      					<span class="glyphicon glyphicon-calendar"></span> <span class="bpost-date"><?php the_date(); ?></span>
                    </header>
    					<?php the_excerpt(); ?>
    			</article>

    		<?php endwhile; else: ?>

    			<p>There are no posts or pages</p>

    		<?php endif; ?>	<!-- end WP Loop for recent blog posts -->

		</div><!-- end latest posts -->

        <div class="col-md-4 col-md-offset-1">

            <div class="about-me well">

                <h2>About Me</h2>
                <p>Front end developer who also dabbles in design.  Lover of backyard gardening and vegetarian Mexican/Central American foods.</p>
                <ul>
                    <li><a href="https://github.com/jacobarriola">Github</a></li>
                    <li><a href="https://www.linkedin.com/in/jacobarriola">LinkedIn</a></li>
                    <li><a href="https://twitter.com/jacobarriola">Twitter</a></li>
                </ul>

            </div><!-- end about me -->

            <div class="latest-project">

                <h2>Latest Project</h2>

                <?php 
                    // Arguments for $latest_project_post
                    $args = array(
                        'posts_per_page'    => 1,
                        'post_type'         => 'work',
                        );

                    // set var for WP_Query
                    $latest_project_post = new WP_Query( $args );

                ?>

                <?php 
                // Loop for custom post type => work
                if ( have_posts() ) : while ( $latest_project_post->have_posts() ) : $latest_project_post->the_post(); ?>

                    <?php 
                    // Grab custom field 'image'
                        $image =  get_field( 'image' ); 

                        if ( !empty($image) ): ?>

                            <a href="<?php the_permalink(); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-responsive img-thumbnail" /></a>

                    <?php endif; // end custom field 'image' ?> 

                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                    <p class="home-page-excerpt"><a href="<?php the_permalink(); ?>">See the project →</a></p>

                <?php endwhile; // end while for custom post type => work ?>

                <?php endif; // end loop for custom post type => work ?> 

            </div><!-- end latest-project -->
        </div><!-- end sidebar -->





<?php get_footer(); ?>