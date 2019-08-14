<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/custom.css"> 
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css"> 
     <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/carousel.css"> 
      <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/main.css">

      <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.theme.default.min.css">

     <link rel="stylesheet" href="https://use.typekit.net/rzn5lfn.css">




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/jquery.simpleaccordion.js"></script>
	<script>
            $(document).ready(function() {
                $('[data-behavior=accordion]').simpleAccordion({cbOpen:accOpen, cbClose:accClose});
            });


            function accClose(e, $this) {
                $this.find('span').fadeIn(200);
            }

            function accOpen(e, $this) {
                $this.find('span').fadeOut(200)
            }


            $(document).ready(function(){

            	
                 
                 $( "#ufaq-faq-list div:first" ).addClass( "ewd-ufaq-post-active" );
            		
            	
            })

        </script>


	<?php wp_head(); ?>

	

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-header-main">
            <div class="container">

            <div class="mobile-menu">
             <div class="mobile-logo">
             <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                   <img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" class="blue-logo">
                   </a>
             </div>

             <button id="showmenu"><i class="fa fa-bars" aria-hidden="true"></i></button>

             <div class="mobile-navigation-menu">
             <?php if ( has_nav_menu( 'mobile-menu' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Mobile Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'mobile-menu',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
                             
     <div class="header-top-right desktop-view">
    <div class="header-social-icon">
    <ul>
    <li><a href="https://www.facebook.com/mrmtcoffshoreopen/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
       	<li><a href="https://www.instagram.com/mrmtc_offshore_open/" target="_blank"><i class="fa fa-instagram"></i></a></li>
    </ul>
    </div>
    
   

    </div>

</nav><!-- .main-navigation -->
<?php endif; ?>


	
            </div>
             </div>

            <div class="mrmtc_header">
             <div class="row">
              
              <div class="col-sm-4">
              <div class="header_left_menu">
              
 <?php if(is_user_logged_in()){ ?>
     <div class="header-member-download">
    <span><a class="outline_btn outline_btn_hover" href="<?php echo site_url();?>/downloads">Member Downloads</a></span>
    </div>
<?php } ?>


              <div id="site-header-menu" class="site-header-menu">
              <?php if ( has_nav_menu( 'left-menu' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Left Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'left-menu',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>
              </div>
              </div></div>


              <div class="col-sm-4">
               <div class="logo_center">
              <div class="site-branding">
                <?php
                if(is_page(array('contact', 'events', 'login', 'weather-forecast', 'downloads', 'leaderboard', 'entrants','calcuttas', 'all-galleries')) || is_single() )
                  {
                	?>
                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                   <img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" class="blue-logo">
                   </a>
                	<?php } else { ?>

					<?php twentysixteen_the_custom_logo(); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="white-background-logo">
                    <img src="<?php echo get_theme_mod( 'm1_logo' ); ?>">
                    </a>

					<?php } ?>

					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
              </div></div>


              <div class="col-sm-4 text-right">

 <div class="right-side-header">
<div class="header-top-right desktop-view">
    <div class="header-social-icon">
    <ul>
    <li><a href="https://www.facebook.com/mrmtcoffshoreopen/" target="_blank"><i class="fa fa-facebook-f"></i></a></li>
       	<li><a href="https://www.instagram.com/mrmtc_offshore_open/" target="_blank"><i class="fa fa-instagram"></i></a></li>
    </ul>
    </div>
    
    <div class="header-sign-up">
    <?php if(is_user_logged_in()){ ?>
    <span><a class="outline_btn outline_btn_hover" href="<?php echo wp_logout_url( 'http://demosrvr.com/wp/mrmtc/login/'); ?>">Logout</a></span>
    <?php } else { ?>
    <span><a class="outline_btn outline_btn_hover" href="<?php echo site_url();?>/login">Log in</a></span>
    <?php } ?>
    </div>

    </div>
  

              <div id="site-header-menu" class="site-header-menu">
              <?php if ( has_nav_menu( 'right-menu' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Right Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'right-menu',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>
              </div>
              </div>

               </div>
               </div>
               </div>
				
				
			</div></div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
