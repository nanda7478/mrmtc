<?php
/*
 Display Template Name: OffShore Open
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
 <p class="banner_p">Presented By</p><img src="<?php echo site_url();?>/wp-content/uploads/2018/05/ray.png">
</div>
</div>
</div>
<?php endwhile;?>   

<div class="slider_bottom_btn middle_border">
  <div class="container">
   <div class="button-section">
   <div class="row">
   <?php 
     while( have_rows('custom_button') ) : the_row();
   ?>
    <div class="col-lg-3 col-md-3 custom-buttom double_border">
    <a class="btn btn-lg btn-primary" href="<?php the_sub_field('button_url');?>" role="button" target="_blank"><?php the_sub_field('button_title');?></a>
    </div>

    <?php endwhile; ?>

   </div>
   </div>

</div>
</div>

<div class="offshore_page">
<div class="container">
<div class="row">
    <?php
  if( have_rows('offshore_flexible_content') ):

     
    while ( have_rows('offshore_flexible_content') ) : the_row();

        if( get_row_layout() == 'offshore_open' ):
          ?>
      
    <div class="col-lg-3 col-md-5">
    <div class="artwork-section">
     <p><?php the_sub_field('artwork_title');?></p>
    </div>
    </div>

    <div class="col-lg-5 col-md-7">
    <div class="offshore-open-content">
    <?php the_sub_field('content');?>
    </div>
    </div>

    <div class="col-lg-4">
    <div class="table-sponsor">
    <?php echo do_shortcode('[table id=1 /]');?>
    </div>
    </div>
     

 <?php
endif;
endwhile;
endif;
  ?>
</div>


<div class="offshore-logo-section">
<ul class="offshore-logo-image">
 <?php
 while( have_rows('offshore_open_repeater') ) : the_row();
 ?>
 <?php $image = get_sub_field( 'logo' ); ?>
  <li>
    <img src="<?php echo $image['url']; ?>">	
 
  </li>
 <?php endwhile;?>

</ul>

</div>

<div class="table_styling">
<div class="offshore-leaderboard-section">
<h2 class="colored_heading text-center">LeaderBoard</h2>
<div class="row">
<div class="col-lg-3">
 <?php
 while( have_rows('offshore_leaderboard') ) : the_row();
 ?>
 
  <div class="price_skill">
    <h4><?php the_sub_field('price');?></h4>
    <p><?php the_sub_field('title');?>	</p>
 
  </div>

 <?php endwhile;?>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=2 /]');?>

</div>
</div>


</div>

<?php
 while( have_rows('offshore_leaderboard') ) : the_row();
 ?>
 <a class="clickable-text" href="<?php the_sub_field('button_url');?>" role="button">
   <div class="custom-buttom">
    <?php the_sub_field('button_title');?>
    </div>
    </a>

 <?php endwhile;?>
</div>

<div class="offshore-entrants-section">
  <h2 class="colored_heading text-center">Entrants</h2>
  <div class="row">
  <div class="col-sm-12">
  <div class="offshore-entrants-table">
   <?php echo do_shortcode('[table id=3 /]');?>


  
  </div>
</div>
</div>

 <?php
 while( have_rows('offshore_entrants') ) : the_row();
 ?>
 <a class="clickable-text" href="<?php the_sub_field('button_url');?>" role="button">
   <div class="custom-buttom">
    <?php the_sub_field('button_title');?>
    </div>
</a>

 <?php endwhile;?>
</div>


<div class="offshore-calcuttas-section">
<h2 class="colored_heading text-center">Calcuttas</h2>
  <div class="row">
  
  <div class="col-sm-12">
  <div class="offshore-entrants-table">
   <?php echo do_shortcode('[table id=4 /]');?>


 
  </div>
</div>
</div>

  <?php
 while( have_rows('offshore_calcuttas') ) : the_row();
 ?>
 
 <a class="clickable-text" href="<?php the_sub_field('button_url');?>" role="button">
   <div class="custom-buttom">
    <?php the_sub_field('button_title');?>
    </div>
    </a>

 <?php endwhile;?>

</div>
</div>

<div class="logo-slider-section">

<div class="bxslider">
   <?php
   $col = 0;
  while( have_rows('offoshore_slider') ) : the_row();
  $image = get_sub_field( 'offshore_logo' );  
          if($col==0){echo '<div>';}
          ?>
            <img src="<?php echo $image['url']; ?>">
          <?php
          $col++;
          if($col%2==0){echo '</div>'; $col=0;}
          endwhile;
          ?>
    
  </div>

</div>

</div>





<?php
get_footer();
?>