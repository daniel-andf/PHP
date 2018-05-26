<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package passionrouge
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="post-content">
            <header class="entry-header">

                    <?php
                    if ( is_single() ) :
                            the_title( '<h1 class="entry-title">', '</h1>' );

                    else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;
                    the_post_thumbnail();
                    if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta">
                            <?php passionrouge_posted_on(); ?>
                    </div><!-- .entry-meta -->
                    <?php
                    endif; ?>
            </header><!-- .entry-header -->

            <div class="entry-content">
                    
                    <div class="single-post-content">
                        <?php
                                the_content( sprintf(
                                        /* translators: %s: Name of current post. */
                                        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'passionrouge' ), array( 'span' => array( 'class' => array() ) ) ),
                                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                ) );

                                wp_link_pages( array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'passionrouge' ),
                                        'after'  => '</div>',
                                ) );
                        ?>
                    </div>
                    
            </div><!-- .entry-content -->

            <footer class="entry-footer">
                    <?php passionrouge_entry_footer(); ?>
            </footer><!-- .entry-footer -->
        </div>
        
</article><!-- #post-## -->
