<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package token-v2
 */

$contact         = get_field( 'contact', 'option' );
$social          = get_field( 'social', 'option' );
$footer          = get_field( 'footer', 'option' );
$mymenu          = get_field( 'menu', 'option' );
$line_add_friend = $footer['line_add_friend'];
?>
<button onclick="scrollToTop(1000);" class="cd-top">Top</button>
<footer class="box-footer1">
	<div class="container">
		<div class="box-footer-wrapper">
			<div class="_inner">
				<?php
				if ( $footer['content_top'] ) {
					echo wp_kses_post( $footer['content_top'] );
				}
				foreach ( $footer['office'] as $i => $item ) {
					?>
					<dl>
						<dt><?php echo esc_html( $item['title'] ); ?></dt>
						<dd><?php echo wp_kses_post( $item['address'] ); ?></dd>
					</dl>
					<?php
				}
				?>
			</div>
			<div class="_inner link-footer">
				<nav class="link-footer-nav">
					<?php
					if ( ! empty( $mymenu['menu'] ) ) {
						?>
						<dl>
						<?php
						foreach ( $mymenu['menu'] as $i => $item ) {
							?>
							<dd>
								<a href="<?php echo esc_html( $item['link'] ); ?>">
									<?php echo esc_html( $item['name_footer'] ); ?>
								</a>
							</dd>
							<?php
						}
						?>
						</dl>
						<?php
					}
					?>
				</nav>
			</div>
			<div class="_inner link-footer">
				<div class="footer-social">
					<h3 class="footer-title">
						<?php esc_html_e( 'Follow us', 'token-v2' ); ?>
					</h3>
					<?php
					if ( ! empty( $social ) ) {
						?>
						<dl class="group-social-footer">
							<?php
							foreach ( $social as $i => $item ) {
								?>
								<dd class="social-footer">
									<a href="<?php echo esc_html( $item['link'] ); ?>" target="_blank" rel="nofollow">
										<?php echo wp_get_attachment_image( $item['image'], 'full', true, array( 'class' => 'icon-social' ) ); ?>
									</a>
								</dd>
								<?php
							}
							?>
						</dl>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</div>
</footer>
<footer class="box-footer2">
	<div class="container">
		<div class="_inner">
		<?php echo esc_html( $footer['copyright'] ); ?>
		</div>
	</div>
</footer>
<footer class="box-footerdialog">
	<div><?php echo esc_html( $line_add_friend['title'] ); ?></div>
	<a href="<?php echo esc_url( $line_add_friend['link'] ); ?>">
		<img width="127" height="36" border="0" alt="<?php echo esc_html( $line_add_friend['alt'] ); ?>" src="<?php echo esc_url( $line_add_friend['image_link'] ); ?>">
	</a>
</footer>

<?php wp_footer(); ?>
</body>

</html>
