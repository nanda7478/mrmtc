<?php
 /*
  Display Template Name: About Page
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
    <div class="col-sm-6 col-6 custom-buttom">
    <a class="btn btn-lg btn-primary" href="<?php the_sub_field('button_url');?>" role="button" target="_blank"><?php the_sub_field('button_title');?></a>
    </div>

    <?php endwhile; ?>

   </div>
   </div>

</div>
</div>

<div class="about_us_page">
<div class="container">

   <div class="history-membership-section">
   <div class="row row-div frst_row">
    <?php
  if( have_rows('about_flexible_content') ):

     
    while ( have_rows('about_flexible_content') ) : the_row();

        if( get_row_layout() == 'history' ):
          ?>
      <?php $image = get_sub_field( 'history_image' ); ?>
    <div class="col-lg-6">
    <div class="img-history">
    <img src="<?php echo $image['url']; ?>">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="content-history">
     <?php the_sub_field('history_content');?>
    </div>
    </div>
     

 <?php
endif;
endwhile;
endif;
  ?>
</div>


<div class="row row-div scnd_row">
    <?php
  if( have_rows('about_flexible_content') ):

     
    while ( have_rows('about_flexible_content') ) : the_row();

        if( get_row_layout() == 'histroy_one' ):
          ?>
      <?php $image = get_sub_field( 'history_one_image' ); ?>
    
    <div class="col-lg-6">
    <div class="content-history-one">
     <?php the_sub_field('history_one_content');?>
    </div>
    </div>

    <div class="col-lg-6">
    <div class="img-history-one">
    <img src="<?php echo $image['url']; ?>">
    </div>
    </div>
     

 <?php
endif;
endwhile;
endif;
  ?>
</div>



<div class="row row-div thrd_row">
    <?php
  if( have_rows('about_flexible_content') ):

     
    while ( have_rows('about_flexible_content') ) : the_row();

        if( get_row_layout() == 'membership' ):
          ?>
      <?php $image = get_sub_field( 'membership_image' ); ?>
    <div class="col-lg-6">
    <div class="img-membership">
    <img src="<?php echo $image['url']; ?>">
    </div>
    </div>
    <div class="col-lg-6">
    <div class="content-membership">
     <?php the_sub_field('membership_content');?>
    </div>
    </div>
     

 <?php
endif;
endwhile;
endif;
  ?>
</div>


   </div>


<div class="team-section">

  <h2 class="colored_heading">Officers & Trustees</h2>
 
  <ul class="officer-trustees">
    <?php
    $args = array('post_type'=>'team','posts_per_page'=>5);

    $query = new WP_Query($args);
    if($query->have_posts()):
    while( $query->have_posts() ): $query->the_post();
   ?>
  	<li>
  	  <div class="team-image">
       
       <?php
    if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
      ?>
      <!-- <a class="image-link" href="<?php the_permalink();?>"> -->
      <img class="img-responsive flsd"  src="<?php echo esc_url( $large_image_url[0] );?>" />
      <!-- </a> -->
    

      <?php  
    }
    }
    ?>

  	   </div>
       <div class="team_content"> 
  		<h4><?php the_title();?></h4>
  		<span class="team-title-content team_italic"><?php the_field('fish_name');?></span>
  		<span class="team-title-content"><?php the_field('desination');?></span>
  		<span class="team-title-content team_email"><?php the_field('email_address');?></span>
        </div>
  	</li>
<?php endwhile; ?>
   
   <?php endif; ?>

  </ul>


<ul class="officer-trustees-two">
    <?php
    $args = array('post_type'=>'team', 'offset'=>5, 'posts_per_page'=>8);

    $query = new WP_Query($args);
    if($query->have_posts()):
    while( $query->have_posts() ): $query->the_post();
   ?>
  	<li>
  	  <div class="team-image">
       
       <?php
    if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
      ?>
      <!-- <a class="image-link" href="<?php the_permalink();?>"> -->
      <img class="img-responsive flsd"  src="<?php echo esc_url( $large_image_url[0] );?>" />
      <!-- </a> -->
    

      <?php  
    }
    }
    ?>

  	   </div>
          <div class="team_content"> 
  		<h4><?php the_title();?></h4>
  		<span class="team-title-content team_italic"><?php the_field('fish_name');?></span>
  		<span class="team-title-content"><?php the_field('desination');?></span>
  		<span class="team-title-content team_email"><?php the_field('email_address');?></span>
  	     </div>  
    </li>
<?php endwhile; ?>
   
   <?php endif; ?>

  </ul>
</div>


<div class="past-president-section">
<h2 class="colored_heading">Past Presidents</h2>
<?php while(have_posts()) : the_post(); ?> 
<ul class="past-president-list">
<?php if( have_rows('past_presidents') ): ?>
 <?php
  while( have_rows('past_presidents') ): the_row();
 ?>
	<li>
		<h4><?php the_sub_field('president_name');?></h4>
		<span class="past-title-content"><?php the_sub_field('event_year');?></span>
	</li>
<?php endwhile; ?><?php endif; ?>
</ul>
<?php endwhile; ?> 
</div>




</div>
</div>





<?php
get_footer();
?>