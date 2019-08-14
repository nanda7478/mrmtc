<?php
/*
  Display Template Name: Club Records
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

<div class="container">

<div class="club_record_page">
 <div class="club_rcrd_top">
  <div class="row">
  <?php 
     while( have_rows('club_record_repeater') ) : the_row();
   ?>
 <div class="col-sm-6">
 <h4><?php the_sub_field('club_record_title');?></h4>
 <p><?php the_sub_field('club_record_sub_title');?></p>
 </div>
<?php endwhile; ?>
 </div>
</div>
<div class="club-record-section">
  <div class="row">
  <div class="col-sm-12">
  <div class="club-record-table">
   <?php echo do_shortcode('[table id=8 /]');?>
  <div class="color_table_btn text-center"><a class="btn btn-lg btn-primary colored_outline_btn colored_outline_btn_hover" href="javascript:void(0)" id="loadMore">Load More</a>
  </div></div>


  <div class="table-content">
  <?php the_field('club_record_content');?>
  </div>

</div>
</div>
</div>




</div>
</div>



<?php
get_footer();
?>