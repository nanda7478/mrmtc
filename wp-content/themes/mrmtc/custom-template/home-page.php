<?php
/*
  Display Template Name: Home Page
*/

get_header();
?>
<div class="mrmtc_slider">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
              <?php
                 $i=0;            
                 while( have_rows('home_slider') ): the_row();            
                 if ($i == 0) {            
               echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';            
               } else {            
               echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';            
               }            
               $i++;            
            endwhile; ?>
        </ol>
        <div class="carousel-inner">
        <?php
              $z = 0;            
              while( have_rows('home_slider') ): the_row();            
              $image = get_sub_field( 'slider_image' ); ?>

          <div class="carousel-item <?php if ($z==0) { echo 'active';} ?>" style="background-image:url(<?php echo $image['url']; ?>);">
            <div class="container carousel-caption-table">
              <div class="carousel-caption-table-cell text-center">
                <h1 class="big_heading"><?php the_sub_field('slider_heading');?></h1>
                <a class="btn btn-lg btn-primary small_outline_btn outline_btn_hover" href="<?php the_sub_field('button_url');?>" role="button"><?php the_sub_field('button_title');?></a>
              </div>
            </div>
          </div>
       <?php
        $z++;           
        endwhile; 
        ?>

        </div>
      </div>
</div>
<div class="slider_bottom_btn">
  <div class="container">
   <div class="button-section">
   <div class="row">
   <?php 
     while( have_rows('custom_button') ) : the_row();
   ?>
    <div class="col-sm-6 col-6 custom-buttom">
    <a class="btn btn-lg btn-primary" href="<?php the_sub_field('button_url');?>" role="button" target="_blank"><?php the_sub_field('button_title');?></a>
    </div>

    <?php endwhile; ?>

   </div>
   </div>

</div></div>
<div class="container">
<div class="annual-event">
<div class="row">
  <?php
  if( have_rows('event_flexible_content') ):

     
    while ( have_rows('event_flexible_content') ) : the_row();

        if( get_row_layout() == 'annual_events' ):
          ?>
        <?php $image = get_sub_field( 'events_image', 'full' ); ?>

         <div class="col-lg-5 left_event_home"><?php the_sub_field('events_content');?></div>
         <div class="col-lg-7 right_event_home"><img src="<?php echo $image['url']; ?>"></div>
         
        <?php

        endif;

    endwhile;

endif;
  ?>
  </div>
  </div>
</div>



<div class="fifth-section">
<div class="gallery-section">
<?php 

$images = get_field('gallery_section');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul class="gallery_ul" id="myList">
        <?php foreach( $images as $image ): ?>
            <li>
              <div class="home_gallery_img"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

</div>


<div class="gallery-button">
<?php
  if( have_rows('gallery_flexible_content') ): 
    while ( have_rows('gallery_flexible_content') ) : the_row();
    if( get_row_layout() == 'gallery_content' ):
     ?>

<h2 class="big_heading"><?php the_sub_field('title');?></h2>
<a class="btn btn-lg btn-primary outline_btn outline_btn_hover" href="<?php the_sub_field('button_url');?>" role="button"><?php the_sub_field('button_title');?></a>

  <?php
 endif;
endwhile;
endif;
  ?>
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