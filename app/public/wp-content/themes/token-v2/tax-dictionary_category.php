<?php
/**
 * Display single post of dictionary custom post type.
 *
 * @package token
 */

get_header();
$queried_object              = get_queried_object();
$this_post_type              = get_post_type_object( $queried_object->name );
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
			if ( $custom_post_type_background[ $queried_object->name . '_background_image' ] ) {
				$background_image = wp_get_attachment_image( $custom_post_type_background[ $queried_object->name . '_background_image' ], 'large', false, array( 'class' => 'background' ) );
				?>
				<div class="custom-post-type-banner">
					<?php echo wp_kses_post( $background_image ); ?>
					<h1 class="banner-title">
						<a href="<?php echo esc_url( get_post_type_archive_link( $queried_object->name ) ); ?>">
							<?php echo esc_html( $this_post_type->label ); ?>
						</a>
					</h1>
				</div>
				<?php
			}

			$dictionary_categories = get_terms(
				array(
					'taxonomy'   => 'dictionary_category',
					'hide_empty' => true,
				)
			);

			foreach ( $dictionary_categories as $dictionary_category ) {
				$args = array(
					'post_type'      => 'dictionary',
					'posts_per_page' => -1,
					'no_found_rows'  => true,
					'orderby'        => 'title',
					'order'          => 'ASC',
					'tax_query'      => array(
						array(
							'taxonomy' => 'dictionary_category',
							'fields'   => 'term_id',
							'terms'    => array( $dictionary_category->term_id ),
						),
					),
				);

				$dictionary_query = new WP_Query( $args );
				if ( $dictionary_query->have_posts() ) {
					?>
					<div class="dictionary-block">
						<h2 class="dictionary-category-title">
							<?php echo esc_html( $dictionary_category->name ); ?>
						</h2>
						<ul class="vocab-list">
							<?php
							while ( $dictionary_query->have_posts() ) {
								$dictionary_query->the_post();
								echo '<li class="item"><a href="' . esc_url( get_permalink() ) . '">' . wp_kses_post( get_the_title() ) . '</a></li>';
							}
							?>
						</ul>
					</div>
					<?php
				}
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
