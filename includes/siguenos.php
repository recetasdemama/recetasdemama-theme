<?php
class Siguenos_Wg extends WP_Widget {
	function Siguenos_Wg() { parent::WP_Widget(false, 'Siguenos'); }
	
	function update($new_instance, $old_instance) { return $new_instance; }

	function form($instance) {
		$title = esc_attr($instance['title']);
		$facebook = esc_attr($instance['facebook']);
		$twitter = esc_attr($instance['twitter']);
		$youtube = esc_attr($instance['youtube']);
		$rss = esc_attr($instance['rss']);
		?>

		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Titulo:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('Youtube:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo $youtube; ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('rss'); ?>"><?php _e('Rss:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('rss'); ?>" name="<?php echo $this->get_field_name('rss'); ?>" type="text" value="<?php echo $rss; ?>" /></label></p>

		<?php
	}

	function widget($args, $instance) {
		/* Get Variables */
		$args['title'] = $instance['title'];
		if ( $args['title'] == '' )
			$args['title'] = 'Síguenos en:';

		$args['facebook'] = $instance['facebook'];
		$args['twitter'] = $instance['twitter'];
		$args['youtube'] = $instance['youtube'];
		$args['rss'] = $instance['rss'];
		if ( $args['rss'] == '' )
			$args['rss'] = '?feed=rss';

		// Print everything
		echo $args['before_widget'];
		echo $args['before_title'] . $args['title'] . $args['after_title']; 
		?>
		<ul class="social">
			<li class="facebook"><a href="<?=$args['facebook']?>">Facebook</a></li>
			<li class="twitter"><a href="<?=$args['twitter']?>">Twitter</a></li>
			<li class="youtube"><a href="<?=$args['youtube']?>">Youtube</a></li>
			<li class="rss"><a href="<?=$args['rss']?>">RSS</a></li>
		</ul>
		<?php 
		echo $args['after_widget'];
	}
}
register_widget('Siguenos_Wg');
?>