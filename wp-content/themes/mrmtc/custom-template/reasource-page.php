<?php
/*
 Display Template Name: Reasources Page
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

<div class="resource_page">
<div class="container">
<div class="mate-program-section">
<div class="row">
  <?php
  if( have_rows('resource_flexible_content') ):

     
    while ( have_rows('resource_flexible_content') ) : the_row();

        if( get_row_layout() == 'mate_program' ):
          ?>
        <?php $image = get_sub_field('image'); ?>
        
         <div class="col-lg-6 left_mate left_img_re"><img src="<?php echo $image['url']; ?>"></div>
         <div class="col-lg-6 right_mate ul_content_re"><?php the_sub_field('mate_content');?></div>
        <?php

        endif;

    endwhile;

endif;
  ?>
  </div>
  </div>



<div class="weekly-events-section">
<div class="row">
  <?php
  if( have_rows('resource_flexible_content') ):

     
    while ( have_rows('resource_flexible_content') ) : the_row();

        if( get_row_layout() == 'weekly_events' ):
          ?>
        <?php $image = get_sub_field('image'); ?>
        
         <div class="col-lg-6 left_weekly_events ul_content_re"><?php the_sub_field('event_content');?></div>
         <div class="col-lg-6 right_weekly_events"><img src="<?php echo $image['url']; ?>"></div>
        <?php

        endif;

    endwhile;

endif;
  ?>
  </div>
  </div>


<div class="scholarshop-section">
<div class="row">
  <?php
  if( have_rows('resource_flexible_content') ):

     
    while ( have_rows('resource_flexible_content') ) : the_row();

        if( get_row_layout() == 'schoolership' ):
          ?>
        <?php $image = get_sub_field('image'); ?>
        
         <div class="col-lg-6 left_scholership"><img src="<?php echo $image['url']; ?>"></div>
         <div class="col-lg-6 right_scholership ul_content_re"><?php the_sub_field('schoolership_content');?></div>
        <?php

        endif;

    endwhile;

endif;
  ?>
  </div>
  </div>



</div>
</div>






<div class="quick-resource-section">
<?php
  if( have_rows('quick_resource_flexible_content') ): 
    while ( have_rows('quick_resource_flexible_content') ) : the_row();
    if( get_row_layout() == 'quick_section' ):
     ?>
   <?php $image = get_sub_field('quick_image', 'full'); ?>
<div class="auick_resource" style="background-image:url(<?php echo $image['url'];?>);">
 
 <div class="container">
 <div class="icon-title-button">
 <h2 class="big_white_heading"><?php the_sub_field('title');?></h2>
 <ul class="quick-list">
 <?php
   while( have_rows('quick_resource_content') ) : the_row();
 ?>
 <?php $image = get_sub_field('image_icon', 'full'); ?>
  <li>
    <div class="icons_inmg"><a href="<?php the_sub_field('url');?>" target="_blank"><img src="<?php echo $image['url'];?>"></a></div>
    <a class="btn btn-lg btn-primary" href="<?php the_sub_field('url');?>" role="button" target="_blank"><?php the_sub_field('title');?></a>
  </li>
<?php endwhile; ?>
  </ul>
  </div>
 </div>


</div>

<?php
 endif;
endwhile;
endif;
  ?>

</div>


<?php
get_footer();
?>