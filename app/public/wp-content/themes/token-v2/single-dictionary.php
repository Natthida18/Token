<?php
/**
 * Display single post of dictionary custom post type.
 *
 * @package token
 */

get_header();
$queried_object              = get_queried_object();
$this_post_type              = get_post_type_object( $queried_object->post_type );
$custom_post_type_background = get_field( 'background_custom_post_type', 'option' );
?>
<div id="main">
	<div class="container">
		<?php
		if ( have_posts() ) {
			if ( function_exists( 'bcn_display' ) ) {
				?>
				<div class="token-breadcrumb">
					<?php bcn_display(); ?>
				</div>
				<?php
			}
			if ( $custom_post_type_background[ $queried_object->post_type . '_background_image' ] ) {
				$background_image = wp_get_attachment_image( $custom_post_type_background[ $queried_object->post_type . '_background_image' ], 'large', false, array( 'class' => 'background' ) );
				?>
				<div class="custom-post-type-banner">
					<?php echo wp_kses_post( $background_image ); ?>
					<h2 class="banner-title">
						<a href="<?php echo esc_url( get_post_type_archive_link( $queried_object->post_type ) ); ?>">
							<?php echo esc_html( $this_post_type->label ); ?>
						</a>
					</h2>
				</div>
				<?php
			}
			while ( have_posts() ) {
				the_post();
				?>
				<h1 class="single-title">
					<?php the_title(); ?>
				</h1>

				<div class="single-content">
					<?php the_content(); ?>
				</div>

				<?php
			}
		} else {
			?>
			<p>
				<?php echo esc_html__( 'The article or page you are looking for could not be found.', 'token' ); ?>
			</p>
			<?php
		}
		?>
	</div>
</div>
<?php
get_footer();
