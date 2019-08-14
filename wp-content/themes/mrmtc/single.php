<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<div class="container">
<div class="news-sub-page">

<div class="news-details">
<div class="row">

<div class="col-xs-12 col-md-12">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		?>

		
		
		<div class="news-content-deatils">
        			<?php twentysixteen_post_thumbnail(); ?>
<!--<div class="details-matter">-->
           <div class="back-to-news">
    <a href="<?php echo site_url();?>/news/"><i class="fa fa-long-arrow-left"></i> Back To News Feed</a>
    </div>
			<header class="entry-header">
		     <?php the_title( '<h2 class="colored_heading evenheading">', '</h2>' ); ?>
	         </header>

	         <div class="author_date">
             <ul>
             <li class="social-share">
             	
            <div class="entry-share">
           <?php echo do_shortcode("[social_share_button]"); ?> 
				
		
		
	</div>

             </li>
             </ul>
			</div>
			<div class="post_category_name"><?php the_category() ?></div>

			<div class="entry-content">
			<?php the_content();?>
			</div>

<!--</div>-->
		</div>

            <?php
			// Include the single post content template.
			//get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.

			
           
			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ',
				) );
			}

			// End of the loop.
		endwhile;
		?>

		
	</main><!-- .site-main -->

	<?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
</div>
</div></div>


</div>
</div>

<?php get_footer(); ?>
