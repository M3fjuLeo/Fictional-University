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
define( 'AUTH_KEY',          '5E}QTSp&e=2t4,+%5b(%%zZ3KBeql))3K1TL}km]W+M1ldft%M<;{G>@F:}d-@<n' );
define( 'SECURE_AUTH_KEY',   '{Y</c<Vcu>C6oLkG_;IQl~UkTq2IWWf8LQ5%eiR}yrzi;ZH0Ri)]hl8imZ>uv6K>' );
define( 'LOGGED_IN_KEY',     '(CNz2N=wCNL]aOYb6dvVE)*g06%[*EM-nl+(ELpT .ZYv$`r12*ix/YT?<RkW n/' );
define( 'NONCE_KEY',         'oIsPhwlQ*+4N>2iy:hs%O;-Xat#Ezu4(rPw3{PYQC5zG.<+Wz@s*:dG&rpVN_Z^Y' );
define( 'AUTH_SALT',         'eJSckLH*;GYVGDp)gwNCd[oDR^]a:5#C.8<6ZC~.6+vngY)pJ-5(IyQ[BK8ua:C*' );
define( 'SECURE_AUTH_SALT',  'o$|3FOwwG+2,QVX<=#Xb|]38ytjq2mf.}7f&~-A5tN3M;20lutEO^_/|Zo,.NPu*' );
define( 'LOGGED_IN_SALT',    '9s<:V9m2<$4|dz#XIW1GTv;e8d2,FO|$TPz@G3;NoL$Aqv}>!)q7M}}I6 ~@HP#Z' );
define( 'NONCE_SALT',        'R0a&S2]fo /0DX#Zi#3@1`0Fm6+|,!={$Jhe8E@auZEt:W$uZS]0ws)HS/#KX$`y' );
define( 'WP_CACHE_KEY_SALT', '~in:1o;vg X<x1KJXvBD{hUkgu2 K?0[,=ge]jljVo%#m6<9C +%9W6g,,j<&,CX' );


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
