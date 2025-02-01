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
define( 'AUTH_KEY',          '/V_<8b~W`OjG2em24T F {%3on%9^G rs>{e=v&*>N.t)]:^/[{L|-Syzd-BJ,k|' );
define( 'SECURE_AUTH_KEY',   'nY2Xn(%f_E:Rlu!D$fi<)66)[_Hx0g*a#r m~!-qe[E6Gvf/|.3xJ$)#O{/=l9w]' );
define( 'LOGGED_IN_KEY',     '%q[J!7bUospKXoE:+4uL&%@nLt^jz~)hxk{.bn.oL#m>Fn}f>C=`_%po=Utz)QJ1' );
define( 'NONCE_KEY',         '(]0G0u!@62#<z=&78WdKgy;C?M[oMk^+gwV+fZ&F_oKkmYvem+5,^gU8z4-Gh6vx' );
define( 'AUTH_SALT',         '-02<PvXUac37oJ;`SzSh5.]ucKr1tHtE~Pe~y82P0quGI&b<Kr[Iwz(3bKdg]AV|' );
define( 'SECURE_AUTH_SALT',  'K~3j3MGi[s,bHlRM2=b}QR{{>5H`PDceX;PZyGHH86n(l=|sY-gjqCH]%.*HQ 9)' );
define( 'LOGGED_IN_SALT',    'L5A5~+vks{YhDt2F}nWaQo/)qIqT%h2Sm`hGm.kF =U*ZCs1TO]b=BwYN`dex-im' );
define( 'NONCE_SALT',        'Ub;d2]C}ilZyQQ/Y6oYw}yi3>T1tvve8h-+IR/1h[C71lt#Tunf,w3;i78}:b?;q' );
define( 'WP_CACHE_KEY_SALT', 'Hf!>N#XwfFTtsg^iptiTQCy*|[sN=mq(y1Sps&bhE>q>._[65DC /0h*4RtV$$+q' );


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
