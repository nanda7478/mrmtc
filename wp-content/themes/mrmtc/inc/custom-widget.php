<?php
add_action( 'widgets_init', 'services_widget' );
function services_widget() {
    register_widget( 'services_widget' );
}
 
class services_widget extends WP_Widget {
 
    public function __construct() {
        $widget_ops = array(
            'classname' => 'services_widget',
	    'description' => 'Add a service description.'
        );
	$control_ops = array( 'width' => 400, 'height' => 350 );
        parent::__construct( 'services_widget', 'Services', $widget_ops, $control_ops );
    }
	
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );
		echo $args['before_widget'];
		if ( ! empty( $title ) ) {
		echo $args['before_title'] . $title .  $args['after_title'];
		} 


		if ( ! isset( $args['widget_id'] ) ) {
        $args['widget_id'] = $this->id;
      }
      $widget_id = 'widget_' . $args['widget_id'];
       ?>


    <div class="row">
   <?php 
     while( have_rows('footer_content', $widget_id) ) : the_row();
   ?>
   <?php $image = get_sub_field( 'footer_image', $widget_id); ?>
    <div class="col-sm-6 footer-content">
    <div class="first_boxes">
    <div class="footer_bx_img"><img src="<?php echo $image['url']; ?>"></div>
    <div class="heading_positioning"><h2 class="heading_footer_bx"><?php the_sub_field('footer_title', $widget_id);?></h2></div>
    <div class="footer_bx_content">
    <p><?php the_sub_field('footer_content', $widget_id);?></p>
    <a class="btn btn-lg btn-primary outline_btn outline_btn_hover" href="<?php the_sub_field('button_url', $widget_id);?>" role="button"><?php the_sub_field('button_title', $widget_id);?></a>
    </div></div></div>

    <?php endwhile; ?>

   </div>
       


		<?php

		echo $args['after_widget'];
	}
	
	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'title' => '', 'text' => '' ) );
		$filter = isset( $instance['filter'] ) ? $instance['filter'] : 0;
		$title = sanitize_text_field( $instance['title'] );
		?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
		<p><input id="<?php echo $this->get_field_id('filter'); ?>" name="<?php echo $this->get_field_name('filter'); ?>" type="checkbox"<?php checked( $filter ); ?> />&nbsp;<label for="<?php echo $this->get_field_id('filter'); ?>"><?php _e('Automatically add paragraphs'); ?></label></p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		if ( current_user_can( 'unfiltered_html' ) ) {
		$instance['text'] = $new_instance['text'];
		} else {
		$instance['text'] = wp_kses_post( $new_instance['text'] );
		}
		$instance['filter'] = ! empty( $new_instance['filter'] );
		return $instance;
	}
}