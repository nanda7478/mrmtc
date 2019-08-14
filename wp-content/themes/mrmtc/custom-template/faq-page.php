<?php
/*
 Display Template Name: FAQs Page
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
 <div class="faq-section">
  <div class="row">
   <div class="col-sm-12">
   <?php echo do_shortcode('[ultimate-faqs]');?>
   </div>
</div>
 </div>

</div>



<?php
get_footer();
?>