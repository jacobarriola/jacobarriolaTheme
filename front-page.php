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

                <h3>About Me</h3>
                <p>Front end developer who also dabbles in design.  Lover of backyard gardening and vegetarian Mexican/Central American foods.</p>
                <ul>
                    <li><a href="https://github.com/jacobarriola">Github</a></li>
                    <li><a href="https://www.linkedin.com/in/jacobarriola">LinkedIn</a></li>
                    <li><a href="https://twitter.com/jacobarriola">Twitter</a></li>
                </ul>

            </div><!-- end about me -->

            <div class="latest-project">

                <h3>Latest Project</h3>

                <?php 
                    // Arguments for $latest_project_post
                    $args = array(
                        'posts_per_page'    => 1,
                        'post_type'         => 'work',
                        );

                    // set var for WP_Query
                    $latest_project_post = new WP_Query( $args );

                ?>
                <!-- Begin Loop for Work custom post type -->
                <?php if ( have_posts() ) : while ( $latest_project_post->have_posts() ) : $latest_project_post->the_post(); ?>

                    <?php the_title(); ?>
                    <?php the_excerpt(); ?>

                <?php endwhile; else: ?>

                <p>There are no latest projects</p>

                <?php endif; ?> 

            </div><!-- end latest-project -->
        </div><!-- end sidebar -->





<?php get_footer(); ?>