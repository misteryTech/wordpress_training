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
define( 'DB_NAME', 'misterytechwp' );

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
define( 'AUTH_KEY',         '+iTd5J/u9H=VCwb@X$*%!j>dgD$yZ|P@#n~!&RKY Wxje,iO.>Xk,<,{, i~k3Jf' );
define( 'SECURE_AUTH_KEY',  'csoyM+]Miz5+$NC%R#*w^(xz(hy|N!:^y>W4<^iR4ZbL&&~LNtY8%Gz/ujZA5jaR' );
define( 'LOGGED_IN_KEY',    '+CQa`P1Si{9)4`aP~++NFoB.|bF+XgVQhgVg_aQPs:i~iPxy*Tcy=,S61`3@?|N#' );
define( 'NONCE_KEY',        'UG6@WM8[Zyfx=E:JpoBznm(ZMF UN0IZIuSTxK1AnlJ%(W/nm.Qs(@*(khpOSFT)' );
define( 'AUTH_SALT',        'VW45KJV%Gi5s7)r={U~B &S*@6nJqpZBRhb*~~WdD:Kni(q-}>YAU}_l,sLIO8eJ' );
define( 'SECURE_AUTH_SALT', 'crc7@ds9|KOHg_pZ@j3R4D6%vw+JTA7.n/C=]:&j4]<(csX]klA6kYz$dGR-_c-:' );
define( 'LOGGED_IN_SALT',   '3jUohDx*#0)O6 E*~V8S+#.I<VCE2m`rQK7O}rXvFb)o~TsVH>&LHtYLT~*=-U_J' );
define( 'NONCE_SALT',       '!( k^8#,$L~n%msdVne!sLs6rDnl&TFeBfkkefKa)D[gN-6J(lk@ji#rE C4ZP0!' );

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
