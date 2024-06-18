<?php
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
define( 'AUTH_KEY',          ',k<#|T9i7J)fd;M_HYWE*W;omV:}m%*Ms)ua0QU 8#94@g#?nH?MuLc#}uY%iZt~' );
define( 'SECURE_AUTH_KEY',   ';beYq+ TYu$Yi]pB{^)k{3k8(#v<OVR7u+iL oC !~q07ln$%jSKn<`X9SD@3r%w' );
define( 'LOGGED_IN_KEY',     'gKF[F2jndb)dD;5<abuj27@`Z|~-(;t`q,R*}[zOCO$o2NKK.i~[W2VUr_BmK1A%' );
define( 'NONCE_KEY',         'm?3ueXhQ4F><n^J{nMca3GGC6[^R#!$s]&N7v/krt-+{*_*%7zs.ZexP{^sP.6N`' );
define( 'AUTH_SALT',         'qbRdatZd{8v[4d[%JYE x|NZ,|*-r-v!%}=%EF*tv}7rBG$aMJBX pHdPZ@oZ]p#' );
define( 'SECURE_AUTH_SALT',  'LNF/DyKJvB<CnK#[}rK_FQpbZyT$4D( pAm=neIS<xtXw$Fs]/rs$ser;^,OC%X5' );
define( 'LOGGED_IN_SALT',    'u0DonmEUPCSR]@+bXN(A{I*]/$P/%%juR%8!Y:]%R4YZ_UgvZuWh](z=*a[98r7W' );
define( 'NONCE_SALT',        'dQDU&j^ME#hbT3c@/F;/OoS_D(Qh9ZI}:RK^@`KM-Y(r 7Qa2?G?nIjs7W?(NrCl' );
define( 'WP_CACHE_KEY_SALT', '/Yt2>IZIi%Ce-7=&=3xSjG;B v&j|YWi!g_405NBPHk1;CC9i>]s3rdDgo64$jr/' );


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
