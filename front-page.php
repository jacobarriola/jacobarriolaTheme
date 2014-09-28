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

    		<?php endif; ?>	

		</div><!-- end latest posts -->

        <div class="col-md-4 col-md-offset-1 about-me well">

            <h3>About Me</h3>
            <p>Front end developer who also dabbles in design.  Lover of backyard gardening and vegetarian Mexican/Central American foods.</p>
            <ul>
                <li><a href="https://github.com/jacobarriola">Github</li>
                <li><a href="https://www.linkedin.com/in/jacobarriola">LinkedIn</li>
                <li><a href="https://twitter.com/jacobarriola">Twitter</li>
            </ul>

        </div><!-- end about me -->





<?php get_footer(); ?>