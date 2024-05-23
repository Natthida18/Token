<?php
/**
 * Template Name: Product Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package token-v2
 */

get_header();
?>

<div class="container">
	<div class="breadcrumbs">
		<div class="inner">
			<?php
			if ( function_exists( 'bcn_display' ) ) {
				bcn_display();
			}
			?>
		</div>
	</div>
</div>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$product_page_settings = get_field( 'product_page_settings' );
		?>
		<div class="container product-page-container">
			<div class="product-page-content">
				<div class="product-page-header">
					<h1 class="main-title">
						<?php the_title(); ?>
					</h1>
					<div class="product-page-logo">
						<?php
						if ( $product_page_settings['main_logo'] ) {
							echo wp_get_attachment_image( $product_page_settings['main_logo'], array( 250, 9999 ) );
						}
						?>
					</div>
				</div>
				<?php
				if ( $product_page_settings['gallery'] ) {
					?>
					<div class="product-gallery">
						<?php
						foreach ( $product_page_settings['gallery'] as $image ) {
							echo wp_get_attachment_image( $image, array( 9999, 250 ) );
						}
						?>
					</div>
					<?php
				}
				if ( $product_page_settings['details'] ) {
					?>
					<div class="product-details">
						<h2 class="title">
							<?php echo esc_html( $product_page_settings['details_main_title'] ); ?>
						</h2>
						<div class="product-details-inner">
							<table class="table table-condensed">
								<tbody>
									<?php
									foreach ( $product_page_settings['details'] as $detail ) {
										?>
										<tr>
											<th><?php echo esc_html( $detail['title'] ); ?></th>
											<td><?php echo wp_kses_post( $detail['content'] ); ?></td>
										</tr>
										<?php
									}
									?>
								</tbody>
							</table>
							<div class="side-image">
							    <?php
							    if ( $product_page_settings['side_image'] ) {
            						foreach ( $product_page_settings['side_image'] as $image ) {
            							echo wp_get_attachment_image( $image, 'medium' );
            						}
							    }
        						?>
							</div>
						</div>
					</div>
					<?php
				}

				if ( $product_page_settings['files'] ) {
					?>
					<div class="product-files">
						<?php
						foreach ( $product_page_settings['files'] as $file ) {
							$filelink = wp_get_attachment_url( $file['file'] );
							?>
							<div class="product-file">
								<a class="btn btn-primary btn-sm" href="<?php echo esc_url( $filelink ); ?>" target="_blank">
									<?php echo esc_html( $file['title'] ); ?>
								</a>
							</div>
							<?php
						}
						if ( $product_page_settings['download_file_notice'] ) {
							echo wp_kses_post( $product_page_settings['download_file_notice'] );
						}
						?>
					</div>
					<?php
				}

				the_content();
				?>
			</div>
			<div class="product-page-sidemenu">
				<?php echo do_shortcode( '[submenu]' ); ?>
			</div>
		</div>
		<?php
	}
}
get_footer();
?>
