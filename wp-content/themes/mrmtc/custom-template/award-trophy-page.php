<?php
/*
 Display Template Name: Award & Trophies
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

 <div class="award-trophy-section">
  <div class="row">
  <div class="col-sm-12">

   <div class="accordion-group" data-behavior="accordion">
                
           <?php
           $cat_collection = array(
        'taxonomy'               => 'awards_category',
        'orderby'                => 'name',
        'order'                  => 'DASC',
        'hide_empty'             => false,
        'include'                => array(),
        'exclude'                => array(),
        'exclude_tree'           => array(),
        'number'                 => '',
        'offset'                 => '',
        'fields'                 => 'all',
        'name'                   => '',
        'slug'                   => '',
        'hierarchical'           => true,
        'search'                 => '',
        'name__like'             => '',
        'description__like'      => '',
        'pad_counts'             => false,
        'get'                    => '',
        'child_of'               => 0,
        'parent'                 => '',
        'childless'              => false,
        'cache_domain'           => 'core',
        'update_term_meta_cache' => true,
        'meta_query'             => ''
    );
 
  $collection_terms = get_terms( $cat_collection );
   //print_r($collection_terms);
  $t = 1;
foreach($collection_terms as $collection_terms_data) {
           ?>
 <p class="accordion-header <?php if($t == 1) {echo 'open'; } ?>" <?php if($t == 1){ echo 'id="category-accordion"'; } ?>><?php echo $collection_terms_data->name; ?></span></p>
 <div class="accordion-body" <?php if($t == 1){ echo 'style="display:block"'; } ?>>
 <div class="accordion-group" data-behavior="accordion" data-multiple="true">
  <?php
  $args = array(
   'post_type' => 'awards',
   'posts_per_page' => -1,
   'order' => 'DASC',
   'tax_query' => array(
	array(
		'taxonomy' => 'awards_category',
		'field' => 'id',
		'terms' => $collection_terms_data->term_id
	    )
   )
);
$query = new WP_Query( $args );
$i = 1;	  
while ( $query->have_posts() ) : $query->the_post();?>
<p class="accordion-header <?php if($i == 1) {echo 'open'; } ?>" <?php if($i == 1){ echo 'id="accordion-subcategory"'; } ?>><?php the_title();?></p>
<div class="accordion-body" <?php if($i == 1){ echo 'style="display:block"'; } ?>><?php the_content();?></div>
<?php 
$i++;
endwhile;
wp_reset_postdata();	  
?>                       
</div>
</div>
 <?php $t++; } ?>

 </div>

  </div>
  </div>
 </div>

</div>



<?php
get_footer();
?>