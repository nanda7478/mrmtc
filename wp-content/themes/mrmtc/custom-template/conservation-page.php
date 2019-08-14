<?php
/*
  Display Template Name: Conservation Page
*/

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('header_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1 class="big_heading">
<?php the_title(); ?>
 </h1>
</div>
</div>
</div>
<?php endwhile;?> 


<div class="slider_bottom_btn">
  <div class="container">
   <div class="button-section">
   <div class="row">
   <?php 
     while( have_rows('custom_button') ) : the_row();
   ?>
    <div class="col-sm-6 col-12 custom-buttom">
    <a class="btn btn-lg btn-primary" href="<?php the_sub_field('button_url');?>" role="button" target="_blank"><?php the_sub_field('button_title');?></a>
    </div>

    <?php endwhile; ?>

   </div>
   </div>

</div>
</div>


	<div class="recreation-fishing">
		<div class="row">
		 <?php
  if( have_rows('conservation_flexible_content') ):

     
    while ( have_rows('conservation_flexible_content') ) : the_row();

        if( get_row_layout() == 'association' ):
          ?>
        <?php $image = get_sub_field( 'image', 'full' ); ?>
		<div class="col-lg-6"><div class="left-recreation"><?php the_sub_field('association_content');?></div></div>
		<div class="col-lg-6 right-recreation"><img src="<?php echo $image['url']; ?>"></div>


		 <?php

        endif;

    endwhile;

endif;
  ?>
		</div>
	</div>

<div class="container">
  <div class="conservation-logos-section">
  <div class="row">
  <?php
  while( have_rows('conservation_repeater') ) : the_row();
  ?>
   <?php $image = get_sub_field( 'conservation_logo'); ?>
  <div class="col-lg-6">
  	<div class="conservation-logo-list">

  	<div class="conservation-image-button">
    <div class="conservation-about-strip">
  	<img src="<?php echo $image['url']; ?>">
    </div>
  	<a class="btn btn-lg btn-primary colored_outline_btn outline_btn_hover" href="<?php the_sub_field('button_url');?>" role="button" target="_blank"><?php the_sub_field('button_title');?></a>
  	</div>

  	<div class="conservation-logo-content">
  	<?php the_sub_field('conservation_content');?>
  	</div>

  	</div>
  </div>
<?php endwhile; ?>

  </div>
  </div>



</div>


<?php
get_footer();
?>