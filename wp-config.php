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
define( 'DB_NAME', 'theme-develop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']:Ib/0`;[#7qIaF?e}X:-RiKCueFr6@fIOz/>PUoP5kYNn6z&9d6t>2%9(L%@&q9' );
define( 'SECURE_AUTH_KEY',  'v;h1<hlvglFC&HB46KtyS<%t.@QTyu+B~oBoNA?^/f3xas.||f/B*,+2QcLA8?~}' );
define( 'LOGGED_IN_KEY',    'y2R,sui6!|T_{kCgbEQ*i4&7ar3,oq4bXbX|8}Z}T<`Hd3R,j&mB.[c:3gX}!SnS' );
define( 'NONCE_KEY',        ')AAV87cF:1Z=B|V5D}0O$u[#EIrv(Qv%[>-`DLCU=Qy!92U$a9W]9AKO*3$XD4vD' );
define( 'AUTH_SALT',        'Dq;>^~<*.ltP`$l$T^3`3X%vS=``uUOr^{~9p^tm!]qauofD=ZikIa0^=^dy=Ca8' );
define( 'SECURE_AUTH_SALT', 'xR-_ygsF#qk=MJH*LVsG4E<K:)ZYp:Ww9?G(]T`(^t!VW Ri!(EEB@>g{/x)4 I;' );
define( 'LOGGED_IN_SALT',   ')qSWM;C8h sY8dgg%c~U(5*V<&YFv tD.I0>HI)v+nV$@qoYMFUZAyuB~`/S[TKc' );
define( 'NONCE_SALT',       '*t HFd #Hj=[=u>^~tT*_Rw@A)ZOFWcW2?{`/H/+jun8(e:-({g(AJzN5g=6k5$.' );

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
