<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package passionrouge
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-content">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); 
                 the_post_thumbnail();?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php passionrouge_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
                <div class="content-p">
                    <?php the_excerpt(); ?>
                </div>
	</div><!-- .entry-summary -->

	<footer class="entry-footer">
		<?php passionrouge_entry_footer(); ?>
	</footer><!-- .entry-footer -->
    </div>
</article><!-- #post-## -->
