<?php
/**
 * Plugin Stats View Html Card Template File
 *
 * @package WordPress
 * @subpackage Plugin Stats View
 * @since Plugin Stats View 3.00
 * @version 1.00
 */

?>

<div class="pluginstatsview-card-wrap">
	<div>
		<img src="<?php echo esc_url( $icon_url ); ?>" class="pluginstatsview-card-icon" />
		<div class="pluginstatsview-after-icon">
			<div class="pluginstatsview-bold"><a href="<?php echo esc_url( $homepage ); ?>" class="pluginstatsview-astyle"><?php echo esc_html( $name ); ?></a></div>
			<div class="pluginstatsview-small"><?php echo esc_html( $short_description ); ?></div>
			<div class="pluginstatsview-small"><?php echo esc_html__( 'Author', 'plugin-stats-view' ); ?>: <?php echo wp_kses_post( $author_url ); ?></div>
			<div style="clear: both;"></div>
		</div>
	</div>
	<div style="clear: both;"></div>

	<div class="pluginstatsview-small">
		<span class="pluginstatsview-card-left"><a title="<?php echo esc_attr( $ratings_text ); ?>" class="pluginstatsview-astyle"><?php plugin_stats_view_ratings( $rating ); ?></a><?php echo esc_html( $num_ratings ); ?></span>
		<span class="pluginstatsview-card-right"><?php echo esc_html__( 'Last Updated', 'plugin-stats-view' ); ?>: <?php echo esc_html( $lastupdated ); ?></span>
	</div>
	<div class="pluginstatsview-small">
		<span class="pluginstatsview-card-left"><?php echo esc_html( $active_installs ); ?></span>
		<span class="pluginstatsview-card-right"><?php echo esc_html__( 'Tested up to', 'plugin-stats-view' ); ?>: <?php echo esc_html( $tested ); ?></span>
	</div>
	<div class="pluginstatsview-small">
		<span class="pluginstatsview-card-left"><?php echo esc_html__( 'Download', 'plugin-stats-view' ); ?>: <a href="<?php echo esc_url( $download_link ); ?>" class="dashicons dashicons-download pluginstatsview-download"></a></span>
		<span class="pluginstatsview-card-right"><?php echo esc_html__( 'Release', 'plugin-stats-view' ); ?>: <?php echo esc_html( $release ); ?></span>
	</div>
</div>
