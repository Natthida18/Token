<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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

		<!--FB Sharer-->
		<div class="block-social">
			<div id="fb-root"></div>
			<script>
			(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1';
				fjs.parentNode.insertBefore(js, fjs);
			}
			(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-share-button" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
		</div>
		<!--FB Sharer-->

	</div>
</div>

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile;
endif;
get_footer();
?>
