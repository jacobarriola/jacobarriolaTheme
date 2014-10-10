<?php
/**
 * The template for displaying all single posts.
 *
 * @package Jacob Arriola
 */

get_header(); ?>

<?php get_template_part( 'partials/content', 'single' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>