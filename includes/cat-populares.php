<?php
class Popular_Cats extends WP_Widget {
	function __construct() { parent::WP_Widget(false, 'Categorías destacadas'); }

	function Popular_Cats() {
		self::__construct();
	}

	function form($instance) {
		/* Options of the widget */
		$title = esc_attr($instance['title']);
		$npopularcats = esc_attr($instance['npopularcats']);
?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Titulo:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
		<p><label for="<?php echo $this->get_field_id('npopularcats'); ?>"><?php _e('Numero de categorias:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('npopularcats'); ?>" name="<?php echo $this->get_field_name('npopularcats'); ?>" type="text" value="<?php echo $npopularcats; ?>" /></label></p>
<?php
	}

	function update($new_instance, $old_instance) { return $new_instance; }

	function widget($args, $instance) {
		/* Get title */
		$args['title'] = $instance['title'];
		/* If empty, default */
		if (!$args['title'])
			$args['title'] = 'Popular Categorys';

		/* Get nnpopularcats */
		$args['npopularcats'] = $instance['npopularcats'];
		/* If empty, default 10 */
		if (!$args['npopularcats'])
			$args['npopularcats'] = 10;

		/* Get popular cats */
		global $wpdb;
		$query = "SELECT a.name, a.slug, b.term_id, b.count FROM $wpdb->term_taxonomy b
    			LEFT JOIN $wpdb->terms a
    			ON b.term_id = a.term_id
    			WHERE b.taxonomy = 'category'
    			ORDER BY b.count DESC
    			LIMIT ".$args['npopularcats'];
    	$get_categories = $wpdb->get_results($query);

    	// Prepare cats list
	   	$list = '<ul class="popular-category-list">';
		foreach($get_categories as $cat) {
			$list .= '<li><a href="' . get_category_link( $cat->term_id ) . '">' . $cat->name . '</a></li>';
		}
		$list .= '</ul>';

		// Print everything
		echo $args['before_widget'] . $args['before_title'] . $args['title'] . $args['after_title'];
		echo $list;
		echo $args['after_widget'];
	}

}
register_widget('Popular_Cats');
?>