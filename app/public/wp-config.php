<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '`Kv=e!~P/6A3S>&LA|F2f{Jni;l0MM.~,0w*7q]&L`s0bTb<?F/?FNdEbJ`aY1K*' );
define( 'SECURE_AUTH_KEY',   ')WfSGlG4)Cf#wdV}nPmN6=OI;hQLT[8J$!|W]9P^^#=2YAm5jDbbwd-Pv$@}9,e2' );
define( 'LOGGED_IN_KEY',     'I<8x(5=Lcq,e2<1- kU5~84aK<.A)]qunkX!7TGj<.hPJ$!~w=[xm8cGmY`8Iin=' );
define( 'NONCE_KEY',         '4.Vp)Ld,g.d)bt76u6!FS#7pT+hPslZNyX@b7=oFA|VBC.o1)yxGaM%6Qo~CSzuS' );
define( 'AUTH_SALT',         'e=2B/$]N(mFXW8/j]jOUeIno3,{M,s-II|p%p}D8pdy5F~h9c[ky7GN<K-J{uXeE' );
define( 'SECURE_AUTH_SALT',  'VBiOrTV{F~Nd6=FHQ# 6RL7=/#Qbs@)Y*/J|j&FiA@Upr7Z5#i)(]Fqw+ZoMVI.u' );
define( 'LOGGED_IN_SALT',    '1`o{ZB!]Y9VF4w}]T<Lh)dD4CyG)3whI=$.uf5@bp3$iGM!yoa?#T5~U.XT18,v^' );
define( 'NONCE_SALT',        '%* a[fzLcs*y2t7:rB4BZv1{~+u8iL]$`ZZ<>Z}Q&*Us}7%&aP%h+Do^SMy_q,+x' );
define( 'WP_CACHE_KEY_SALT', 'g{@gS&*RV?bH Gm^TM3%8t&lcr,8LTEGXQ.Q+rQtQbnq1(~B+JNN4f<_NYeCNe}~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
