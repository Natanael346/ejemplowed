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
define( 'DB_NAME', 'ejemplo2web' );

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
define( 'AUTH_KEY',         '}uO$k]fky&&w<qp7eHMKWYa@z#m~O8cYf#cfe ?5|T]dA*SqzW]rI6xAm]C89g0M' );
define( 'SECURE_AUTH_KEY',  '2c!}oY`FaN? Q7ioiol4<i4+2.(|`%h9n9Ew#_`I5@.hC-}KK_T-I=.pl%.b}%<f' );
define( 'LOGGED_IN_KEY',    '(w_WJt%pot([!}q/=pURv|0rcVhEz0n{vrr[Ci`1BJw<Gb33e>tHdmYs@B;T_H<t' );
define( 'NONCE_KEY',        '2eoYt_-pQFsf=t~PyiP8hh-N4{x:%(CsQ0{>}Go*00PQkhZ@O*NrTMWp)cCl}M!s' );
define( 'AUTH_SALT',        'pM4f`!bzB[*EK+GJF}k^`P7Gx(SXCk!qnouS`T.sqY.%+=fvNRgd >#(FpSMiVkZ' );
define( 'SECURE_AUTH_SALT', 'tp,:So|!X?.@9a1fRdZDkFwKL5jqH2)JSwLI~1fS{|V;$UhwFa?9lH}L#lOP4Xni' );
define( 'LOGGED_IN_SALT',   'vAjv{9`]>bqPisbdtwdb(<3L1^J>uTx^%f?@3>5j~l:))N?y^?CpW]c:mEW4oNV9' );
define( 'NONCE_SALT',       ' qy}E(NE^+~G6a5C5=%5[1t,s+FqYOg,GL/-d>O%*lu3^0.2SXE/~V)ZyF$p.y-h' );

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
