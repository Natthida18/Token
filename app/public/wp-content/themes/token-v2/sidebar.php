<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package token-v2
 */

if ( ! is_active_sidebar( 'Language-switch' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-language-switch">
	<?php dynamic_sidebar( 'Language-switch' ); ?>
</aside><!-- #secondary -->
