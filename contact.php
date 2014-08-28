<?php 

/*

	Template Name:  Contact Page

*/



get_header(); ?>
<div class="container bpost-container"> 
	<?php if (have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
	
	<div class="row">
		<div class="col-md-5">

	        <article>
	        	<?php the_content(); ?>
	        </article>

	<?php endwhile; // end of the loop. ?>

	<?php endif; ?>
		</div><!-- end wp content -->

		<div class="col-md-6 col-md-offset-1">
			<div id="wufoo-q1is2u2r195eta9"></div>

				<script type="text/javascript">var q1is2u2r195eta9;(function(d, t) {
				var s = d.createElement(t), options = {
				'userName':'thepark1400',
				'formHash':'q1is2u2r195eta9',
				'autoResize':true,
				'height':'517',
				'async':true,
				'host':'wufoo.com',
				'header':'hide',
				'ssl':true};
				s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
				s.onload = s.onreadystatechange = function() {
				var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
				try { q1is2u2r195eta9 = new WufooForm();q1is2u2r195eta9.initialize(options);q1is2u2r195eta9.display(); } catch (e) {}};
				var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
				})(document, 'script');</script>

		</div><!-- end Wufoo form  -->
	</div><!-- end row -->
</div><!-- end container -->

<?php get_footer(); ?>