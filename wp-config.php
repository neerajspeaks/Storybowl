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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'traveler' );

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
define( 'AUTH_KEY',         'hIjYA1h#~aWv2xXi2rR)_]3Y(J&(T.^p3s$0U;|fJ<emg?z:nKFAv&Vyr&1-]D8$' );
define( 'SECURE_AUTH_KEY',  'Y3`ORLHL/F=ghp?% &de^8}pUN=}DikQlwEqub0^M4D`8_ZU{Z*Ks;jUoFyl#+74' );
define( 'LOGGED_IN_KEY',    'Mou(=Y/!KojO1_B_#6;1LPw]oC6V6]B7*cVJ5x4r=Tq{(rjX6<PY0]6!s?Zl&OM1' );
define( 'NONCE_KEY',        '(;dfk`a#@3s>JHrw66X]:`QG+*(H#Opz+|x%Gu$~sAV-l{EVOUZS9n_aWbFFg%2r' );
define( 'AUTH_SALT',        ';^t:FPD_3*Zwn>*(9~gfb_XxUrxc)Xr2bW`ZYA <MQAmk7V|96gO<(t6L)5cY_DY' );
define( 'SECURE_AUTH_SALT', 'wtbo*#~yPA4wcO#xXkv<K<`f*p#01Uad!&4p;VAb9hW?&xfDDx.o]cQncn0]gYr%' );
define( 'LOGGED_IN_SALT',   ' s^QCkYyR)Es|P2K22eyUm:R0VCd {;>T9{E7^wWfUQfQK#vDvseqsB,%zN;(F,0' );
define( 'NONCE_SALT',       '55rse:|j9=kl?=]6o7X#X?,_%@UxE;Z}^Du]<[5&bA.a`3<R&J2x~XR(4R/Im`l@' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
