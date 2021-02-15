<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WPBoxy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("post__area--single"); ?>>
			<header class="entry-header">
	
						<div class="post__area--featured">
                           	 <!-- <img src="https://cdn.pixabay.com/photo/2021/01/13/16/46/workout-5914643_960_720.jpg" alt="post url" class="post__area--img"> -->
							<?php wpboxy_post_thumbnail(); ?>
                        </div>
						<div class="post__area--excerpt">
							<?php
								if ( is_singular() ) :
									the_title( '<h1 class="entry-title">', '</h1>' );
								else :
									the_title( '<h2 class="entry-title secondary-heading"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								endif;

								if ( 'post' === get_post_type() ) :
									?>
									<div class="entry-meta">
										<?php
										wpboxy_posted_on();
										wpboxy_posted_by();
										?>
									</div><!-- .entry-meta -->
								<?php endif; ?>
			</header><!-- .entry-header -->

			<div class="entry-content">
								<?php
								the_content(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wpboxy' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										wp_kses_post( get_the_title() )
									)
								);

								wp_link_pages(
									array(
										'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wpboxy' ),
										'after'  => '</div>',
									)
								);
								?>
						</div><!-- .entry-content -->
						</div>
		<!-- post thumbnail end here -->
			<footer class="entry-footer">
					<?php wpboxy_entry_footer(); ?>
			</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
