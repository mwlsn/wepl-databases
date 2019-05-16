<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage Spacious
 * @since Spacious 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( 'spacious_before_post_content' ); ?>
	<div class="entry-content clearfix">
		<header class="entry-header">
					<ol class="breadcrumb">
	<li><a href="http://we247.org/info/">Research</a></li>
	<li><a href="http://we247.org/databases/">All Databases (A-Z)</a></li>
</ol>
<br>
<br>
		<h1 class="entry-title"><?php print_post_title() ?></h1>
<div class="restriction">
				<?php echo get_the_term_list ( $post->ID, 'restriction', 'Access Restrictions: ', ', ', ''); ?>
				</div>
		<?php 
			the_content();

			$spacious_tag_list = get_the_tag_list( '', '&nbsp;&nbsp;&nbsp;&nbsp;', '' );
			if( !empty( $spacious_tag_list ) ) {
				?>
				<div class="tags">
					<?php
					_e( 'Tagged on: ', 'spacious' ); echo $spacious_tag_list;
					?>
				</div>
				<?php
			}

			wp_link_pages( array( 
			'before'            => '<div style="clear: both;"></div><div class="pagination clearfix">'.__( 'Pages:', 'spacious' ),
			'after'             => '</div>',
			'link_before'       => '<span>',
			'link_after'        => '</span>'
      ) );
		?>
	</div>

	</div>

				<div class="taxonomies"><div class="database-info">

				<div class="topic">
					<?php echo get_the_term_list ( $post->ID, 'topic', 'Topic: ', ', ', ''); ?>
				</div>

				<div class="organization">
				<?php echo get_the_term_list ( $post->ID, 'organization', 'Organization: ', ', ', ''); ?></div>
				</div>

				

		</div>

	
	<?php
	do_action( 'spacious_after_post_content' );
   ?>
</article>

