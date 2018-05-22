<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SEO
 */

?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php if(has_post_thumbnail()) : ?>
        <div class="seo-featured-image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('crazy-seo-post-thumb'); ?>
            </a>
        </div>
        <?php endif; ?>

        <header class="entry-header">
            <?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <?php crazy_seo_posted_on(); ?>
                </div>
                <!-- .entry-meta -->
                <?php
		endif; ?>
        </header>
        <!-- .entry-header -->

        <div class="entry-content">
            <?php
            
            if(is_single()){
                the_content( sprintf(
                    /* translators: %s: Name of current post. */
                    wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'seo-crazy' ), array( 'span' => array( 'class' => array() ) ) ),
                    the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ) );
            }else{
                the_excerpt();
                 echo '<a class="read-more-btn" href="' . esc_url( get_permalink() ) . '">'.esc_html__('READ MORE' ,'seo-crazy').'</a>'; 
            }
			

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'seo-crazy' ),
				'after'  => '</div>',
			) );
		?>
        </div>
        <!-- .entry-content -->

        <footer class="entry-footer">
            <?php crazy_seo_entry_footer(); ?>
        </footer>
        <!-- .entry-footer -->
    </article>
    <!-- #post-## -->
