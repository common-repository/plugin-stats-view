<?php
/**
 * Plugin Stats View Html Normal Template File
 *
 * @package WordPress
 * @subpackage Plugin Stats View
 * @since Plugin Stats View 3.00
 * @version 1.00
 */

?>

<div class="pluginstatsview-normal-wrap">
	<div>
		<?php if ( ! empty( $banner_url ) ) : ?>
			<img src="<?php echo esc_url( $banner_url ); ?>" class="pluginstatsview-banner" />
		<?php endif; ?>
		<img src="<?php echo esc_url( $icon_url ); ?>" class="pluginstatsview-normal-icon" />
		<div class="pluginstatsview-after-icon">
			<div class="pluginstatsview-bold"><a href="<?php echo esc_url( $homepage ); ?>" class="pluginstatsview-astyle"><?php echo esc_html( $name ); ?></a></div>
			<div><a title="<?php echo esc_attr( $ratings_text ); ?>" class="pluginstatsview-astyle"><?php plugin_stats_view_ratings( $rating ); ?></a><?php echo esc_html( $num_ratings ); ?></div>
			<div><?php echo esc_html__( 'Version', 'plugin-stats-view' ) . esc_html( $version ); ?></div>
		</div>
	</div>
	<div style="clear: both;"></div>

	<div><?php echo esc_html( $active_installs ); ?></div>
	<div><?php echo esc_html( $short_description ); ?></div>
	<details open class="pluginstatsview-details">
	<summary class="pluginstatsview-summary"><?php echo esc_html__( 'Specification', 'plugin-stats-view' ); ?></summary>
	<?php if ( wp_is_mobile() ) : ?>
		<details class="pluginstatsview-mobile-details">
		<summary class="pluginstatsview-summary"><?php echo esc_html__( 'Date' ); ?></summary>
			<span class="pluginstatsview-mobile-indent">
				<div><?php echo esc_html__( 'Author', 'plugin-stats-view' ); ?>: <?php echo wp_kses_post( $author_url ); ?></div>
				<div><?php echo esc_html__( 'Last Updated', 'plugin-stats-view' ); ?>: <?php echo esc_html( $lastupdated ); ?></div>
				<div><?php echo esc_html__( 'Release', 'plugin-stats-view' ); ?>: <?php echo esc_html( $release ); ?></div>
			</span>
		</details>
		<details class="pluginstatsview-mobile-details">
		<summary class="pluginstatsview-summary"><?php echo esc_html__( 'Compatible version', 'plugin-stats-view' ); ?></summary>
			<span class="pluginstatsview-mobile-indent">
				<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'PHP', 'plugin-stats-view' ); ?>: </span><?php echo esc_html( $requires_php ); ?></div>
				<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'WordPress', 'plugin-stats-view' ); ?>: </span><?php echo esc_html( $requires ); ?></div>
				<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'Tested up to', 'plugin-stats-view' ); ?>: </span><?php echo esc_html( $tested ); ?></div>
			</span>
		</details>
		<details class="pluginstatsview-mobile-details">
		<summary class="pluginstatsview-summary"><?php echo esc_html__( 'Links' ); ?></summary>
			<span class="pluginstatsview-mobile-indent">
				<div><span class="pluginstatsview-bold">WordPress : </span><a href="<?php echo esc_url( $homepage ); ?>" class="dashicons dashicons-wordpress pluginstatsview-download"></a></div>
				<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'Download', 'plugin-stats-view' ); ?>: </span><a href="<?php echo esc_url( $download_link ); ?>" class="dashicons dashicons-download pluginstatsview-download"></a></div>
				<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'Donation', 'plugin-stats-view' ); ?>: </span><a href="<?php echo esc_url( $donate_link ); ?>" class="dashicons dashicons-external pluginstatsview-download"></a></div>
			</span>
		</details>
	<?php else : ?>
		<table class="pluginstatsview-table">
			<tr class="pluginstatsview-tr1">
				<th class="pluginstatsview-th"><?php echo esc_html__( 'Date' ); ?></th>
				<th class="pluginstatsview-th"><?php echo esc_html__( 'Compatible version', 'plugin-stats-view' ); ?></th>
				<th class="pluginstatsview-th"><?php echo esc_html__( 'Links' ); ?></th>
			</tr>
			<tr class="pluginstatsview-tr2">
				<td class="pluginstatsview-td">
					<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'Author', 'plugin-stats-view' ); ?>: </span><?php echo wp_kses_post( $author_url ); ?></div>
					<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'Last Updated', 'plugin-stats-view' ); ?>: </span><?php echo esc_html( $lastupdated ); ?></div>
					<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'Release', 'plugin-stats-view' ); ?>: </span><?php echo esc_html( $release ); ?></div>
				</td>
				<td class="pluginstatsview-td">
					<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'PHP', 'plugin-stats-view' ); ?>: </span><?php echo esc_html( $requires_php ); ?></div>
					<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'WordPress', 'plugin-stats-view' ); ?>: </span><?php echo esc_html( $requires ); ?></div>
					<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'Tested up to', 'plugin-stats-view' ); ?>: </span><?php echo esc_html( $tested ); ?></div>
				</td>
				<td class="pluginstatsview-td">
					<div><span class="pluginstatsview-bold">WordPress : </span><a href="<?php echo esc_url( $homepage ); ?>" class="dashicons dashicons-wordpress pluginstatsview-download"></a></div>
					<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'Download', 'plugin-stats-view' ); ?>: </span><a href="<?php echo esc_url( $download_link ); ?>" class="dashicons dashicons-download pluginstatsview-download"></a></div>
					<div><span class="pluginstatsview-bold"><?php echo esc_html__( 'Donation', 'plugin-stats-view' ); ?>: </span><a href="<?php echo esc_url( $donate_link ); ?>" class="dashicons dashicons-external pluginstatsview-download"></a></div>
				</td>
			</tr>
		</table>
	<?php endif; ?>
	</details>

	<?php if ( 'true' === $open || $open ) : ?>
		<details open class="pluginstatsview-details">
	<?php else : ?>
		<details class="pluginstatsview-details">
	<?php endif; ?>
	<summary class="pluginstatsview-summary"><?php echo esc_html__( 'Description', 'plugin-stats-view' ); ?></summary>
		<div class="pluginstatsview-normal-desc"><?php echo wp_kses_post( $description ); ?></div>
	</details>

</div>
