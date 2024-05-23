<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package token-v2
 */

$contact          = get_field( 'contact', 'option' );
$social           = get_field( 'social', 'option' );
$mymenu           = get_field( 'menu', 'option' );
$header_sub_title = get_field( 'header_sub_title', 'option' );
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="oPiJ4YN3H4Ul83Ghq8dA367x61e1jrMCiZ2FHYSLYZ0" />
	<meta name="theme-color" content="#ffffff">
	<!-- wp_head() -->
	<?php wp_head(); ?>
	<!-- GoogleAnalytics -->
	<script>
	(function(i, s, o, g, r, a, m) {
		i['GoogleAnalyticsObject'] = r;
		i[r] = i[r] || function() {
			(i[r].q = i[r].q || []).push(arguments)
		}, i[r].l = 1 * new Date();
		a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
		a.async = 1;
		a.src = g;
		m.parentNode.insertBefore(a, m)
	})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
	ga('create', 'UA-61623121-1', 'auto');
	ga('send', 'pageview');
	</script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-176846772-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());
	gtag('config', 'UA-176846772-1');
	</script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	if ( apply_filters( 'wpml_current_language', null ) === 'ja' ) {
		?>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v11.0"
		nonce="xJ1WPuMD"></script>
		<?php
	} elseif ( apply_filters( 'wpml_current_language', null ) === 'th' ) {
		?>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0"
			nonce="1pNmHe0j"></script>
		<?php
	}
	?>
	<header class="box-logo">
		<div class="text_head">
			<div class="container">
				<div class="text_head_box">
					<div class="text_head_text">
						<?php
						echo esc_html( $header_sub_title );
						?>
					</div>
					<?php
					if ( ! empty( $social ) ) {
						?>
						<dl class="box-social-main">
							<div class="box-social-top">
								<?php
								foreach ( $social as $i => $item ) {
									?>
									<a href="<?php echo esc_html( $item['link'] ); ?>" target="_blank" rel="nofollow">
										<?php echo wp_get_attachment_image( $item['image'], 'full', true ); ?>
									</a>
									<?php
								}
								?>
							</div>
						</dl>
						<?php
					}
					?>
					<div class="box-lang">
						<?php get_sidebar( 'language_switch' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="h_navi_smp">
				<div class="h_logo">
					<a href="<?php echo esc_url( home_url() ); ?>">
						<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full', false, array( 'class' => 'img-responsive' ) ); ?>
					</a>
				</div>
				<ul id="menu">
					<li>
						<div class="main_menu">
							<img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/navi_arrow_smp.png' ) ); ?>">
						</div>
					</li>
				</ul>
			</div>
			<div class="h_navi_pc">
				<div class="logo-pc">
					<a href="<?php echo esc_url( home_url() ); ?>">
						<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full', false, array( 'class' => 'img-responsive' ) ); ?>
					</a>
				</div>
				<nav class="box-menu1">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu-mobile',
						'menu_class'     => 'menu-header',
					)
				);
				?>
				</nav>
			</div>
		</div>
		<nav class="sub_menu">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'menu-header',
				)
			);
			?>
		</nav>
	</header>
	<div class="menu-fixed">
		<header class="box-phone">
			<div class="container">
			<?php
			if ( ! empty( $contact['tel'] ) ) {
				?>
				<div class="inner">
					<?php
					foreach ( $contact['tel'] as $i => $item ) {
						?>
						<dl>
							<dt><?php echo esc_html( $item['name'] ); ?></dt>
							<dd><a href="tel:<?php echo esc_html( $item['number'] ); ?>"><?php echo esc_html( $item['number'] ); ?></a></dd>
						</dl>
						<?php
					}

					if ( ! empty( $social ) ) {
						?>
						<dl class="box-social-main">
							<div class="box-social-top">
								<?php
								foreach ( $social as $i => $item ) {
									?>
									<a href="<?php echo esc_html( $item['link'] ); ?>" target="_blank" rel="nofollow">
										<?php echo wp_get_attachment_image( $item['image'], 'full', true ); ?>
									</a>
									<?php
								}
								?>
							</div>
						</dl>
						<?php
					}
					?>
				</div>
				<?php
			}
			?>
			</div>
		</header>
		<?php
		if ( ! empty( $mymenu['menu'] ) ) {
			?>
			<header class="box-menu2">
				<div class="container">
						<ul class="visible-md visible-lg">
						<?php
						foreach ( $mymenu['menu'] as $i => $item ) {
							?>
							<li>
								<a href="<?php echo esc_html( $item['link'] ); ?>">
									<?php echo wp_get_attachment_image( $item['image_md'], 'full' ); ?>
								</a>
							</li>
							<?php
						}
						?>
						</ul>
						<ul class="visible-xs visible-sm _small">
						<?php
						foreach ( $mymenu['menu'] as $i => $item ) {
							?>
							<li>
								<a href="<?php echo esc_html( $item['link'] ); ?>">
								<?php echo wp_get_attachment_image( $item['image_xs'], 'full' ); ?>
									<span><?php echo esc_html( $item['name'] ); ?></span>
								</a>
							</li>
							<?php
						}
						?>
						</ul>
				</div>
			</header>
			<?php
		}
		?>
	</div>
