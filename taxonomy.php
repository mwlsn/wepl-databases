<?php
/**
 * Taxonomy Index
 */
?>

<?php get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">
		

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
			<ul class="nav nav-tabs">
  <li role="presentation"><a href="https://we247.org/">Home</a></li>
  <li role="presentation"><a href="https://we247.org/toys/">Toys A - Z</a></li>
  <li role="presentation"><a href="https://we247.org/databases/">Databases A-Z</a></li>
</ul>
		
			<div class="well well-sm"><h2 class="page-title">
			<?php
			$current_term = get_queried_object ();
			$taxonomy = get_taxonomy($current_term->taxonomy);
			echo $taxonomy->label . ': ' . $current_term->name;
			?>
			</h2></div>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php get_template_part( 'navigation', 'archive' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>
				
			<?php endif; ?>


		</div><!-- #content -->


	</div><!-- #primary -->

	
	
	<?php spacious_sidebar_select(); ?>
	
	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>