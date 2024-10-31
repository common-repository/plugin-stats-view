<?php
/**
 * Plugin Stats View Html Simple Template File
 *
 * @package WordPress
 * @subpackage Plugin Stats View
 * @since Plugin Stats View 3.00
 * @version 1.00
 */

?>

<div class="pluginstatsview-simple-wrap">
	<div>
		<img src="<?php echo esc_url( $icon_url ); ?>" class="pluginstatsview-simple-icon" />
		<div class="pluginstatsview-after-icon">
			<div class="pluginstatsview-bold"><a href="<?php echo esc_url( $homepage ); ?>" class="pluginstatsview-astyle"><?php echo esc_html( $name ); ?></a></div>
			<div class="pluginstatsview-small"><a title="<?php echo esc_attr( $ratings_text ); ?>" class="pluginstatsview-astyle"><?php plugin_stats_view_ratings( $rating ); ?></a></div>
			<div class="pluginstatsview-small"><?php echo esc_html( $active_installs ); ?></div>
		</div>
	</div>
	<div style="clear: both;"></div>
</div>
