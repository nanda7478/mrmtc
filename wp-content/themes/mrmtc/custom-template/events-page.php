       <?php
/*
 Display Template Name: Event Page
*/

get_header();
?>

<div class="event-section-detail">
  <?php
    while( have_rows('event_page_repeater') ) : the_row();
  ?>
  <?php $image = get_sub_field( 'event_banner_image' ); ?>
 <div class="event-inner-content" style="background-image: url(<?php echo $image['url']; ?>);">
 <div class="container">
  <div class="event_banner_content"><h1 class="big_white_heading"><?php the_sub_field('event_title');?></h1>
  <p class="white_para"><?php the_sub_field('event_date');?></p>
  <a class="btn btn-lg btn-primary white_bg_btn" href="<?php the_sub_field('event_button_url');?>" role="button"><?php the_sub_field('event_button_title');?></a>
 </div>
 </div></div>
 <?php
  endwhile;
 ?>

</div>
  <div class="container">
  <div class="event-list-section">
    	<h2 class="colored_heading text-center">ALL 2018 EVENTS</h2>
    <ul class="event-list-content">
    <?php
    while( have_rows('events_list_repeater') ) : the_row();   
    ?>
    <li>
    	<h4><?php the_sub_field('title');?></h4>
    	<?php the_sub_field('content');?>
    </li>
   <?php endwhile;?>


   <?php
    while( have_rows('download_printable') ) : the_row();   
    ?>
    <li class="last_btn">
    <div class="download-pritable-version">
    	<h4><?php the_sub_field('download_title');?></h4>
    	<a class="btn btn-lg btn-primary outline_btn outline_btn_hover" href="<?php the_sub_field('download_button_url');?>" role="button" target="_blank"><?php the_sub_field('download_button_title');?></a>
    	</div>
    </li>
   <?php endwhile;?>
   
    </ul>
  </div>

  </div>



<?php
get_footer();
?>