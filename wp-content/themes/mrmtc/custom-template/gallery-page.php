<?php
/*
  Display Template Name: Gallery page
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


<div class="container text-center">
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">


  <div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
<?php 

$images = get_field('catches_gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
<?php $i = 1; ?>
<?php foreach( $images as $image ): ?>
    <div class="carousel-item <?php if($i == 1) { echo "active"; } ?>">
    
     <div class="gallery_img"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
      
    </div>
     <?php $i++; endforeach; ?>
<?php  endif; ?>

  </div>

  <!-- Controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    </div>
  </div>
</div>
</div>



<div class="catches-gallery-section button-positioning">
<?php 

$images = get_field('catches_gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul id="myList" class="gallery_ul">
        <?php foreach( $images as $image ): ?>
            <li>
              <div class="home_gallery_img"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<div class="catches-gallery-button button-heading-positioning">
<?php
  if( have_rows('catches_gallery_flexible') ): 
    while ( have_rows('catches_gallery_flexible') ) : the_row();
    if( get_row_layout() == 'catches_gallery_content' ):
     ?>

<h2 class="big_heading"><?php the_sub_field('catches_gallery_title');?></h2>
<a class="btn btn-lg btn-primary outline_btn outline_btn_hover" href="<?php the_sub_field('catches_gallery_button_url');?>" role="button" data-toggle="modal" data-target=".bs-example-modal-lg"><?php the_sub_field('catches_gallery_button_title');?></a>

  <?php
 endif;
endwhile;
endif;
  ?>
</div></div>



<div class="container text-center">
<div class="modal fade bs-example-modal-lg-one" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">


  <div id="demo_one" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
<?php 

$images = get_field('offshore_open_gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
<?php $i = 1; ?>
<?php foreach( $images as $image ): ?>
    <div class="carousel-item <?php if($i == 1) { echo "active"; } ?>">
    
    <div class="gallery_img"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
      
    </div>
     <?php $i++; endforeach; ?>
<?php  endif; ?>

  </div>

  <!-- Controls -->
  <a class="carousel-control-prev" href="#demo_one" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo_one" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    </div>
  </div>
</div>
</div>




<div class="offshore-gallery-section button-positioning">
<?php 

$images = get_field('offshore_open_gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul id="myList" class="gallery_ul">
        <?php foreach( $images as $image ): ?>
            <li>
              <div class="home_gallery_img"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<div class="offshore-gallery-button button-heading-positioning">
<?php
  if( have_rows('offshore_gallery_flexible') ): 
    while ( have_rows('offshore_gallery_flexible') ) : the_row();
    if( get_row_layout() == 'offshore_gallery_content' ):
     ?>

<h2 class="big_heading"><?php the_sub_field('offshore_gallery_title');?></h2>
<a class="btn btn-lg btn-primary outline_btn outline_btn_hover" href="<?php the_sub_field('offshore_gallery_button_url');?>" role="button" data-toggle="modal" data-target=".bs-example-modal-lg-one"><?php the_sub_field('offshore_gallery_button_title');?></a>

  <?php
 endif;
endwhile;
endif;
  ?>
</div></div>


<div class="container text-center">
<div class="modal fade bs-example-modal-lg-two" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">


  <div id="demo_two" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
<?php 

$images = get_field('war_shore_gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
<?php $i = 1; ?>
<?php foreach( $images as $image ): ?>
    <div class="carousel-item <?php if($i == 1) { echo "active"; } ?>">
    
     <div class="gallery_img"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
      
    </div>
     <?php $i++; endforeach; ?>
<?php  endif; ?>

  </div>

  <!-- Controls -->
  <a class="carousel-control-prev" href="#demo_two" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo_two" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
    </div>
  </div>
</div>
</div>




<div class="war-gallery-section button-positioning">
<?php 

$images = get_field('war_shore_gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>
    <ul id="myList" class="gallery_ul">
        <?php foreach( $images as $image ): ?>
            <li>
              <div class="home_gallery_img"><?php echo wp_get_attachment_image( $image['ID'], $size ); ?></div>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<div class="war-gallery-button button-heading-positioning">
<?php
  if( have_rows('war_shore_gallery_flexible') ): 
    while ( have_rows('war_shore_gallery_flexible') ) : the_row();
    if( get_row_layout() == 'war_shore_gallery_content' ):
     ?>

<h2 class="big_heading"><?php the_sub_field('war_shore_gallery_title');?></h2>
<a class="btn btn-lg btn-primary outline_btn outline_btn_hover" href="<?php the_sub_field('war_shore_gallery_button_url');?>" role="button" data-toggle="modal" data-target=".bs-example-modal-lg-two"><?php the_sub_field('war_shore_gallery_button_title');?></a>
  <?php
 endif;
endwhile;
endif;
  ?>
</div></div>

<?php 
   if(is_user_logged_in()){
?>
<div class="all-galleries-button">
<a class="btn btn-lg btn-primary colored_outline_btn outline_btn_hover" href="<?php echo site_url();?>/all-galleries/" role="button">All Galleries</a>
</div>
<?php } ?>

<?php
 if(is_page('gallery')) { 
?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<?php } ?>

<?php
get_footer();

?>