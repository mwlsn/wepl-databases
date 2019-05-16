<?php
/**
 * The template for displaying Archive page.
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<?php get_header(); ?>

	<?php do_action( 'spacious_before_body_content' ); ?>

	<div id="primary">
		<div id="content" class="clearfix">

			<?php if ( have_posts() ) : ?>

			<header class="page-header">
						<ol class="breadcrumb">
	<li><a href="http://we247.org/info/">Research</a></li>
	<li><a href="http://we247.org/databases/">All Databases (A-Z)</a></li>
</ol>
<br>
<br>

		
			<div class="well"><h3 class="page-title">All Databases (A-Z)</h3><a href="#bottom">Start at Z</a> | <a href="#topic">Browse by Topic</a></div>

<div class="intro">As a library card holder, you can access high-quality databases of full-text periodicals from within your public library and from home.  You will need a valid CLEVNET library card and your PIN/Password to access these electronic resources. Some databases can be accessed from within the library only. Some databases are only available with a valid Willoughby-Eastlake Public Library card, which is designated by a prefix of 10005 or 28089. <a href="https://www.clevnet.org/node/7">Forgot your PIN/Password?</a></div>
<hr>
	
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php get_template_part( 'navigation', 'archive' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'archive' ); ?>
				
			<?php endif; ?>
<a name="bottom"></a>
		<div class="well"><h5>Browse by topic:</h5>
				<?php
				//list terms in a given taxonomy
				$taxonomy = 'topic';
				$tax_terms = get_terms($taxonomy);
				?>
				<ul><p>
				<?php
				foreach ($tax_terms as $tax_term) {
				echo '' . '<a href="' . esc_attr(get_term_link($tax_term, $taxonomy)) . '" title="' . sprintf( __( "View all posts in %s" ), $tax_term->name ) . '" ' . '>' . $tax_term->name.'</a> | ';
			}
			?>
				</p></ul></div><a name="topic">
		</div><!-- #content -->
	</div><!-- #primary -->
	
	<?php spacious_sidebar_select(); ?>
	
	<?php do_action( 'spacious_after_body_content' ); ?>

<?php get_footer(); ?>