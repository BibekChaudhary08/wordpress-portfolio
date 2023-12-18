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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'firstpro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '>Ly~/$5,xXEP>L)IOK-uQkZ:(y(_5_*}&kr_J08ox^8Y+fXL>a1CXCt89iiSQ<>U' );
define( 'SECURE_AUTH_KEY',  'L8~Hu^HhMI$K-{~(P:Tt!J8judydX-3@-ys3[}bQA7-wH%a-9pIDWU3a5aj{{JHR' );
define( 'LOGGED_IN_KEY',    'QGi)O6*G#87^%#Js8_;ID.*D5XZYf<b*2E(b1_DI+PdS``O.tX(#u0&H0xfTZMOB' );
define( 'NONCE_KEY',        'pZ|lG`W#u3zmnBwyp|UO!-Mx$pU$(rS$o*%E;nD;?ziNwl%@U4G.AT+Qu)2-he+ ' );
define( 'AUTH_SALT',        '&Tovx^h7gU&>JII/$=1Zc|AK:u?XE*k*g[rZwI#0 d)m0_~z>T9vn0?qdHp0Pi>W' );
define( 'SECURE_AUTH_SALT', 'P_4,5x<bx;3FXqt=}=jt<?7X]=wXe#1YPa(^dRGd.yzJ0+.F_$,q)]:pAHH1GCBS' );
define( 'LOGGED_IN_SALT',   'zfEp>wPD4i(7|iyj!32VVJNVtg?U_DMF7/$)?0)|7t!)P]$CjF#r {[XG`17hOqt' );
define( 'NONCE_SALT',       '*K~tQchvBSB,XWG#LiL]KJ_1-yNt`08UgBn.qs(Q=_z%#r/sH^G~#)M~ f|s,*DB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
