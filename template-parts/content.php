<?php
/**
 * @package amoredio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="well">
		<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="h3 entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php amoredio_posted_on(); ?>
			</div><!-- .entry-meta -->
			<hr>
			<?php endif; ?>
		</header><!-- .entry-header -->
		
		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'amoredio' ), array( 'span' => array() ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>
		
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'amoredio' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		
		<footer class="entry-footer">
			<?php amoredio_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->