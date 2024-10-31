<?php
/**
 * Plugin Stats View Html All Template File
 *
 * @package WordPress
 * @subpackage Plugin Stats View
 * @since Plugin Stats View 3.00
 * @version 1.00
 */

?>
<div class="pluginstatsview-all-wrap">
<?php if ( ! $totalonly ) : ?>
	<?php
	foreach ( $stats_arr as $key => $value ) {
		?>
		<div class="pluginstatsview-all-single-wrap">
			<div>
				<img src="<?php echo esc_url( $value['icon_url'] ); ?>" class="pluginstatsview-simple-icon" />
				<div class="pluginstatsview-after-icon">
					<div class="pluginstatsview-bold"><a href="<?php echo esc_url( $value['homepage'] ); ?>" class="pluginstatsview-astyle"><?php echo esc_html( $value['name'] ); ?></a></div>
					<div class="pluginstatsview-small"><a title="<?php echo esc_attr( $value['ratings_text'] ); ?>" class="pluginstatsview-astyle"><?php plugin_stats_view_ratings( $value['rating'] ); ?></a></div>
					<div class="pluginstatsview-small"><?php echo esc_html( $value['active_installs'] ); ?></div>
				</div>
			</div>
			<div style="clear: both;"></div>
		</div>
		<?php
	}
	?>
	<div style="clear: both;"></div>
<?php endif; ?>

	<div class="pluginstatsview-all-graph-wrap">
		<div>
			<?php /* translators: Plugins count */ ?>
			<?php echo esc_html( sprintf( __( '%1$d Plugins', 'plugin-stats-view' ), number_format( $count ) ) ); ?>
		</div>
		<div>
			<?php echo esc_html( number_format( $active_installs ) . __( '+ ', 'plugin-stats-view' ) . __( 'active installs', 'plugin-stats-view' ) ); ?>
		</div>
		<div>
			<?php echo esc_html( number_format( $downloadeds ) . __( 'Download', 'plugin-stats-view' ) ); ?>
		</div>
		<div class="pluginstatsview-all-reviews-count">
			<?php echo esc_html__( 'Reviews count', 'plugin-stats-view' ); ?>
		</div>
		<?php if ( 0 < $full_rate_count ) : ?>
			<?php
			foreach ( $all_ratings as $key => $value ) {
				?>
				<div style="line-height: 1em;">
					<span class="pluginstatsview-all-reviews-text">
						<?php echo esc_html( $rate_num_text[ $key ] ); ?>
					</span>
					<span class="pluginstatsview-all-reviews-progress">
						<progress class="paview" value="<?php echo esc_attr( $all_per[ $key ] ); ?>" max="100"></progress>
					</span>
					<span class="pluginstatsview-all-reviews-text">
						<?php echo esc_html( $all_rate[ $key ] ); ?>
					</span>
				</div>
				<?php
			}
			?>
			<div class="pluginstatsview-all-reviews-count">
				<?php echo esc_html( __( 'Reviews total', 'plugin-stats-view' ) . number_format( $full_rate_count ) ); ?>
			</div>
		<?php endif; ?>
	</div>
</div>
