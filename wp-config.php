<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testweb2' );

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
define( 'AUTH_KEY',         'Yb5Ly~hwg9j!%NPn!1]4hyrdKU](-*g *?f1VvHwQ=BJ]|_N~baHO?j<(C/c4GHM' );
define( 'SECURE_AUTH_KEY',  'Rp1xb_eqK>XW2>Jzag(Y``>c9Gb;<9g(zT|r?azMiaOpTQv-f;rF%JV>7:K:sDm2' );
define( 'LOGGED_IN_KEY',    '_re#euX**`;qUznhi*{*l@}KWC~wj:V|V#/KMHwD|z+MQ4if9cnv9TwABPrAo`M4' );
define( 'NONCE_KEY',        'yN3;?$.AQ)=LDX2HZxOSZE@] ?=FIA{]CX^}-!<em&r04<s:<2p4J^Vr4x7J}/(i' );
define( 'AUTH_SALT',        'T[_qQ;lEq^s}$V}V],Mj)&J}gP&Dev[H}ZRiVYqSR@%A/Zp<-tsn`uyl9UK7LF@{' );
define( 'SECURE_AUTH_SALT', 'X4Vxf6GkJIOYkH7,&kO.S-<#zN.qBm,#pI?cXl<Iskl^/ru)c7x%9t}L~9}^(dJL' );
define( 'LOGGED_IN_SALT',   '37FU}$akx]q?Oc`i,BY|Y._-5~um>`WZI-cM&fKQG#dzWC06r<lU<4%m{/4]aQJ~' );
define( 'NONCE_SALT',       'L/qp0Qa*x$h. qV1$9!7eeRti-Fmn$A>4;x.4#-u.j)ed>.AA/]eQ2r{G&)IXt]{' );

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
