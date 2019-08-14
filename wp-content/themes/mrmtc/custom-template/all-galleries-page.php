<?php
/*
  Display Template Name: All Galleries
*/

get_header();
?>

 <div class="container">
    <div class="all_galleries_page">

   <div class="all_galleries-section">
    <div class="row">
     <div class="col-sm-12">
     	<h2 class="colored_heading text-center"><?php the_field('page_title');?></h2>

     	<!-- <ul class="download-list">
         <?php while(have_rows('download_repeater')) : the_row(); ?>
         	<li><a href="<?php the_sub_field('url');?>" target="_blank"><?php the_sub_field('title');?></a></li>
         <?php endwhile;?>
     	</ul> -->
     </div>
    </div>


  <ul class="download-list">
         <?php
  $args = array(
   'post_type' => 'gallery',
   'posts_per_page' => -1,
   'order' => 'DASC',
   );

  $query = new WP_Query( $args );  
while ( $query->have_posts() ) : $query->the_post();
   ?>
  <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
       <?php 
endwhile;
wp_reset_postdata();	  
?> 
    </ul>

   
   


   </div>



  </div>
</div>



<?php
get_footer();
?>