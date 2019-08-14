<?php
/*
 Display Template Name: Calcuttas page
*/

 get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('header_image'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1 class="big_heading">
<?php the_field('banner_title'); ?>
 </h1>
 <p class="banner-date">Friday, August 24TH AT 6:30PM</p>
</div>

<div class="back-to-event">
    <a href="<?php echo site_url();?>/offshore-open/"><i class="fa fa-long-arrow-left"></i> Back To Event Page</a>
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

<div class="container">
<?php if(is_page('calcuttas')) : ?>
<div class="calcuttas-section">
  <div class="row"> 
  <div class="col-sm-12">
  <h2 class="colored_heading text-center">Calcuttas</h2>
  <div class="calcuttas-table">
   <?php echo do_shortcode('[table id=5 /]');?>

  </div></div>
</div>
</div>
<?php endif;?>

<?php if(is_page('entrants')) : ?>
<div class="entrants-section">
  <div class="row">
  <div class="col-sm-12">
  <h2 class="colored_heading text-center">Entrants</h2>
  <div class="calcuttas-table">
  
   <?php echo do_shortcode('[table id=6 /]');?>

  </div></div>

</div>
</div>
<?php endif;?>






<?php if(is_page('leaderboard')) : ?>

<div class="leaderboard-section">
<h2 class="colored_heading text-center">Leaderboard</h2>
<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$47,500</h4>
    <p>Tuna Skill A </p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=2 /]');?>

</div>
</div>


</div>
</div>

<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$25,175</h4>
    <p>Tuna Skill B </p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=9 /]');?>

</div>
</div>
</div>
</div>

<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$10,260</h4>
    <p>Tuna Skill C </p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=10 /]');?>

</div>
</div>
</div>
</div>


<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$22,325</h4>
    <p>Tuna Skill D </p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=11 /]');?>

</div>
</div>
</div>
</div>

<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$24,700</h4>
    <p>Tuna Skill E </p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=12 /]');?>

</div>
</div>
</div>
</div>


<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$4,275</h4>
    <p>Swordfish Calcutta </p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=13 /]');?>

</div>
</div>
</div>
</div>

<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$5,795</h4>
    <p>Mahi Calcutta</p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=14 /]');?>

</div>
</div>
</div>
</div>


<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$4,750</h4>
    <p>Wahoo Calcutta</p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=15 /]');?>

</div>
</div>
</div>
</div>


<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$2,090</h4>
    <p>Boats 35' and less</p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=16 /]');?>

</div>
</div>
</div>
</div>


<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$5,605</h4>
    <p>Daily Tuna Jackpot</p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=17 /]');?>

</div>
</div>
</div>
</div>

<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$7,600</h4>
    <p>Blue Marlin</p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=18 /]');?>

</div>
</div>
</div>
</div>

<div class="leaderboard-tables">
<div class="row">
<div class="col-lg-3">

  <div class="price_skill">
    <h4>$7,600</h4>
    <p>White Marlin</p>
 
  </div>

</div>

<div class="col-lg-9">
<div class="offshore-leaderboard-table">
<?php echo do_shortcode('[table id=19 /]');?>

</div>
</div>
</div>
</div>



</div>
<?php endif;?>








</div>




<?php
get_footer();

?>