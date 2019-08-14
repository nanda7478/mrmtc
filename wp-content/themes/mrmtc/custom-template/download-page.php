<?php
/*
 Display Template Name: Download Page
*/

get_header();
?>

  <div class="container">
    <div class="download_page">

   <div class="download-section">
    <div class="row">
     <div class="col-sm-12">
     	<h2 class="colored_heading text-center"><?php the_field('page_title');?></h2>

     	<ul class="download-list">
         <?php while(have_rows('download_repeater')) : the_row(); ?>
         	<li><a href="<?php the_sub_field('url');?>" target="_blank"><?php the_sub_field('title');?></a></li>
         <?php endwhile;?>
     	</ul>
     </div>
    </div>
   </div>

<div class="minutes-archive-section">
<div class="row">
<div class="col-sm-12">
<h2 class="colored_heading text-center">Minutes Archives</h2>
<?php echo do_shortcode("[accordions id='601']"); ?>
</div>
</div>
 </div>

  </div>
</div>

<?php
get_footer();
?>