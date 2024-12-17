<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sbastola_wblog' );

/** Database username */
define( 'DB_USER', 'sbastola_wblog' );

/** Database password */
define( 'DB_PASSWORD', 'eu9MB6!fh2@WBLOG' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'dAd_f3)N;[b~dNy^UC~p^~pW5UI4O:[gPU9jUS{,vO28-3{Ns{;E<_f!kG:_XC-j' );
define( 'SECURE_AUTH_KEY',  ':~az<x&VMxSsvqwna0SCZ@,gZ@.c9%hh~9rDcq#%dm(1 WZ vt/(E5|y!<FL!5nD' );
define( 'LOGGED_IN_KEY',    '&g7tRd2;?F1De@|g$A<#9|I <GC2I6(99z.0oTN!%O/a(V7-xH$h6<usckiX#}Wz' );
define( 'NONCE_KEY',        'nIxFjX]g3L+.b Q7[n@Dv4n.]eY$gIMvNL}ed{dYT</ymfe_)_z.*U8*-<7/*[&{' );
define( 'AUTH_SALT',        '/Q {2ylkY=mU+-x<%uYy3]{Ahu5z&6 L.BEWuW}h9d`$E~d!Id(N]6H#3hLQI[6o' );
define( 'SECURE_AUTH_SALT', '#@p5,K<VQ7R5(BIDq:B6O<A2de:3<U8k}/FOcn>QjGNUj>o_u`x^zd]7MLAJKv5Y' );
define( 'LOGGED_IN_SALT',   '224:Y.&zDy1[*aF~v%,E7!F.PQM5-(r6L!&U^<f|:D>#z7si`=n/{=vyr?gXIr$u' );
define( 'NONCE_SALT',       'Y Xtubx-ItT@t8Np/|a vw^(P-oR-u;s^^6N,Kf!t.Lb}JQH(N->7XhLz^6X;wZB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog__';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';