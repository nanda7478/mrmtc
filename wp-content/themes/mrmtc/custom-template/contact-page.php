<?php
/*
 Display Template Name: Contact Us
*/

get_header();
?>

<div class="contact_page">
<div class="container">
<div class="contact-form-section">
<div class="row">
  <?php
  if( have_rows('contact_flexible_content') ):

     
    while ( have_rows('contact_flexible_content') ) : the_row();

        if( get_row_layout() == 'contact_form' ):
          ?>
       
        
         <div class="col-lg-6 left_contact">
         <div class="left_content_contact">
         <?php the_sub_field('contact_details');?>
         </div></div>
         <div class="col-lg-6 right_contact">
         <div class="right_contact_form">
         <?php the_sub_field('form');?>
         </div></div>
        <?php

        endif;

    endwhile;

endif;
  ?>
  </div>
  </div>

  </div>
</div>


<?php
get_footer();
?>