<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">

<?php
 if(is_page(array('contact', 'login', 'downloads')))
 {
?>

<div class="second_footer">
        <div class="container">
        <div class="top_menu_footer">
        <div class="row">
       <div class="col-lg-4 para_col">
       <?php dynamic_sidebar('footer-1');?>
       </div>
       <div class="col-lg-6 col-md-9 menu_col">

       <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
        <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentysixteen' ); ?>">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'footer-menu',
              'menu_class'     => 'primary-menu',
             ) );
          ?>
        </nav><!-- .main-navigation -->
      <?php endif; ?>

       </div>

       <div class="col-lg-2 col-md-3 soc">

       <ul class="footer_social">
        <li><a href="https://www.facebook.com/mrmtcoffshoreopen/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/mrmtc_offshore_open" target="_blank"><i class="fa fa-instagram"></i></a></li>
       </ul>

       </div>
      
        </div></div>
<div class="bottom_newsletter">
        <div class="row">
        <div class="col-sm-12">
       <?php dynamic_sidebar('footer-2');?>
        </div></div>
        </div>
</div></div>

<?php } else { ?>
<div class="first_footer">
    <div class="container">
    <div class="first_footer_box">
   <?php dynamic_sidebar('sidebar-3');?>
    </div></div></div>

        <div class="second_footer">
        <div class="container">
        <div class="top_menu_footer">
        <div class="row">
       <div class="col-lg-4 para_col">
       <?php dynamic_sidebar('footer-1');?>
       </div>

       <div class="col-lg-6 col-md-9 menu_col">

       <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer-menu',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>

       </div>

       <div class="col-lg-2 col-md-3 soc">

       <ul class="footer_social">
       	<li><a href="https://www.facebook.com/mrmtcoffshoreopen/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
       	<li><a href="https://www.instagram.com/mrmtc_offshore_open" target="_blank"><i class="fa fa-instagram"></i></a></li>
       </ul>

       </div>
      
        </div></div>
<div class="bottom_newsletter">
        <div class="row">
        <div class="col-sm-12">
       <?php dynamic_sidebar('footer-2');?>
        </div></div>
        </div>
</div></div>

			<?php } ?>

		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>

<script>

$(window).scroll(function(){
    if ($(window).scrollTop() >= 1) {
       $('.site-header-main').addClass('fix-header');
    }
    else {
       $('.site-header-main').removeClass('fix-header');
    }
});

</script>


<script type="text/javascript">
 $(document).ready(function() {
        $('#showmenu').click(function() {
                $('.mobile-navigation-menu').slideToggle("milliseconds");
        });
    });
	
</script>







<?php if(is_page('club-records')) : ?>
<script type="text/javascript">
  $(document).ready(function() {

  var pagelength = 5;
  var pageIndex = 1;
  //hide all tr greater than page length
  var selector = "tr:gt(" + pagelength + ")";
  $(selector).hide();
  
  $("#loadMore").click(function(){
    var itemsCount = ((pageIndex * pagelength) + pagelength);   
    var selector = "tr:lt(" + itemsCount + ")";
    $(selector).show();
    pageIndex++;
  });
  
});


</script>
<?php endif;?>
<?php
if(is_page('offshore-open')) {
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.5/jquery.bxslider.min.js'></script>
<script type="text/javascript">
  
  $('.bxslider').bxSlider({
  minSlides: 8,
  maxSlides: 4,
  slideWidth: 1000,
  slideMargin: 20,
  auto: true,
});
</script>

<?php } ?>

</body>
</html>
