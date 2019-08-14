<?php
/*
  Display Template Name: Product Page
*/

get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('all_pages_banner'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1 class="big_heading">
<?php the_title(); ?>
 </h1>
 <div class="content_part"><?php the_content();?></div>
</div>
</div>
</div>
<?php endwhile;?>

<div class="container">
<div class="produc-page-section">
<div class="row">
  <?php
  if( have_rows('quality_products') ):
  while ( have_rows('quality_products') ) : the_row();
   if( get_row_layout() == 'quality_products_content_and_title' ):
          ?>
    <?php $image = get_sub_field( 'quality_products_image', 'full' ); ?>
     <div class="col-lg-7 delivered_royce_content_title">
         <div class="royce_content_section">
         <h1><?php the_sub_field('quality_products_title');?></h1>
         <?php the_sub_field('quality_products_contetnt');?>
         </div>
         </div>
         <div class="col-lg-5 delivered_royce_image"><img src="<?php echo $image['url']; ?>"></div>   <?php
        endif;
    endwhile;
      endif;
     ?>
  </div>
  </div>


<div class="royce_colors_section">
<?php
  if( have_rows('royce_colors') ): 
  while ( have_rows('royce_colors') ) : the_row();
   if( get_row_layout() == 'royce_colors_title_and_content' ):
  ?>
<h2 class=""><?php the_sub_field('royce_colors_title');?></h2>
<?php
 endif;
endwhile;
endif;
  ?>
 <div class="row">
 	<?php
  if( have_rows('royce_colors') ): 
    while ( have_rows('royce_colors') ) : the_row();
    if( get_row_layout() == 'royce_colors_title_and_content' ):
     ?>
<div class="col-lg-12"><?php the_sub_field('royce_colors_content');?></div>
  <?php
 endif;
endwhile;
endif;
  ?>
 </div>

<div class="royce_colors_posts">
<div class="row">
	<?php $args = array(
           'post_type' => 'product' ,
           'order' => 'DESC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'product_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'royce-colors'
  	                     )
                     )
            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
			<div class="col-lg-4">
				<a class="blog-thumb-img" href="<?php the_permalink();?>" title="">
					<?php
			if ( has_post_thumbnail() ) {
         $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />'; 
           }
          }
         ?>
		</a>
		<div class="caption">
		<h4 itemprop="headline">
        <a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a>
        </h4>
		<p itemprop="text" class="flex-text text-muted">5 ways baby boomers are changing healthcare Starting in 2011, 3 million baby boomers each year reach retirement age....</p>
		</div>
		</div>
       <?php endwhile; ?>
       <?php endif; ?>
       <?php wp_reset_postdata(); ?>

</div>
</div>
</div>


<div class="royce_product_section">
<?php $args = array(
           'post_type' => 'page' ,
            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
<?php
  if( have_rows('royce_product') ): 
    while ( have_rows('royce_product') ) : the_row();
    if( get_row_layout() == 'royce_product_title_and_content' ):
     ?>
<h2 class=""><?php the_sub_field('royce_product_title');?></h2>
<?php
 endif;
endwhile;
endif;
  ?>
  <?php endwhile; ?>
 <?php endif; ?>
<?php wp_reset_postdata(); ?>
 <div class="row">
 <?php $args = array(
           'post_type' => 'page' ,
            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
 	<?php
  if( have_rows('royce_product') ): 
    while ( have_rows('royce_product') ) : the_row();
    if( get_row_layout() == 'royce_product_title_and_content' ):
     ?>
<div class="col-lg-12"><?php the_sub_field('royce_product_content');?></div>
  <?php
 endif;
endwhile;
endif;
  ?>
  <?php endwhile; ?>
 <?php endif; ?>
 <?php wp_reset_postdata(); ?>
 </div>


<div class="royce_product_posts">
<div class="row">
	<?php $args = array(
           'post_type' => 'product' ,
           'order' => 'DESC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'product_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'royce-specialty'
  	                     )
                     )

            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
			<div class="col-lg-4">
				<a class="blog-thumb-img" href="<?php the_permalink();?>" title="">
					<?php
			if ( has_post_thumbnail() ) {
            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />';
        
             }
           }
         ?>
		</a>
		<div class="caption">
		<h4 itemprop="headline">
        <a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a>
        </h4>
		<p itemprop="text" class="flex-text text-muted">5 ways baby boomers are changing healthcare Starting in 2011, 3 million baby boomers each year reach retirement age....</p>
		</div>
		</div>

		<?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

</div>
</div>
</div>


<div class="beyond-product-section">
<?php $args = array(
           'post_type' => 'page' ,
            ); ?>
<?php query_posts($args); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
 if( have_rows('quality_products_service') ): 
    while ( have_rows('quality_products_service') ) : the_row();
    if( get_row_layout() == 'quality_products_service_title_and_image' ):
     ?>
   <?php $image = get_sub_field('quality_products_service_image', 'full'); ?>
<div class="beyond-product_image" style="background-image:url(<?php echo $image['url'];?>);">
 

 <div class="global_reach_content_section">
 <h2 class="big_white_heading"><?php the_sub_field('quality_products_service_title');?></h2>
  </div>

<div class="beyond_reach_list">
	<div class="row">
	<?php
	if( have_rows('products_service_list') ):
	while( have_rows('products_service_list') ) : the_row(); 
	?>
	<?php $image = get_sub_field('quality_products_service_image', 'full'); ?>
		<div class="col-lg-4">
			<img src="<?php echo $image['url'];?>" style="width: 130px; padding-left: 37px;">

		<h4><?php the_sub_field('quality_products_service_title');?></h4>
       <div class="beyond_reach_content"><?php the_sub_field('quality_products_service_content');?></div>
		</div>

	<?php 
	endwhile;
	endif;
	?>
	</div>

</div>
 </div>
<?php
endif;
endwhile;
endif;
  ?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
  </div>



</div>

<?php
get_footer();
?>