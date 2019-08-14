<?php
get_header();
?>
<div class="container">
<div class="single-gallery-section">
 <?php
   
while ( have_posts() ) : the_post();
   ?>

<div class="all_gallery_title">
  <?php the_title();?>
</div>
   <?php 

$images = get_field('gallery_image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

if( $images ): ?>


 <article>
  <?php foreach( $images as $image ): ?>
    <section>
     <div class="images">
    <a href="<?php echo $image['url']; ?>" data-toggle="lightbox" data-gallery="hidden-images">
      <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
    </a>
      </div>
      </section>
    <?php endforeach; ?>
  </article>
<?php endif; ?>
    

  <?php 
endwhile;  
?> 
</div>
</div>
<style type="text/css">
  article {
  columns: 4;
  margin-bottom: 40px;
}
section {
  margin-bottom: 15px;
}
.images img{
  width:  100%; 
} 

.ekko-lightbox-nav-overlay {
  display: flex;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1;
}

.ekko-lightbox-nav-overlay a {
  align-items: center;
  color: #fff;
  display: flex;
  flex: 1 1 0;
  font-size: 30px;
  opacity: 1;
  transition: opacity 0.5s ease 0s;
  z-index: 1;
}

.ekko-lightbox-nav-overlay a:last-child span {
  text-align: right;
}

.ekko-lightbox a:hover {
  opacity: 1;
  text-decoration: none;
}

.ekko-lightbox-nav-overlay a span {
  padding: 0 30px;
}

.ekko-lightbox-nav-overlay a > * {
  flex-grow: 1;
}

.fade.show {
   opacity: 0.91;
}

.fade {
  opacity: 0;
  transition: opacity 0.15s linear 0s;
}

.ekko-lightbox-container > div.ekko-lightbox-item {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  width: 100%;
}
.modal.show .modal-dialog {
  transform: translate(0px, 0px);
}

.modal-dialog {
  display: block !important;
  flex: 1 1 1px !important;
  max-width: 551px !important;
}
.modal-content {
  background-color: transparent;
}
/**
.ekko-lightbox-item {
  max-height: 500px;
  overflow: hidden;
}**/
/**
.img-fluid {
  height: 500px;
}
**/
.modal-dialog {
  margin-top: 85px
 }


</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.2.0/ekko-lightbox.min.js"></script>
<script type="text/javascript">
	jQuery(document).on("click", '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  jQuery(this).ekkoLightbox();
});
</script>


<?php
get_footer();
?>