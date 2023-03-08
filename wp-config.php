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
define( 'DB_NAME', 'web_wordpress' );

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
define( 'AUTH_KEY',         '!G3Sx7Kks~koJbTx{tF@.Yx-{J.f#CwhI4f3?f$$}l`dY@!+>J4+E1{ e`:C+^+&' );
define( 'SECURE_AUTH_KEY',  'mx=$%u]S)?>*UldeRy(OSG>`v(25Pp>U|1jf{~sD3~HcQW-~1a4r`OGi@=fsZ~2[' );
define( 'LOGGED_IN_KEY',    ',:nNVmEV~J8(~2;g4.gIaV&2rj;ck<f|nyZ1pbB)y~<[OloR/4`EE>FSF-LLr|5k' );
define( 'NONCE_KEY',        'qGt-WLt]ReTO9ZzGkZ+uz7tC+3O4_6q!lFpjGZbz~F2M*@8rMF_3M08*j%A#Oo|6' );
define( 'AUTH_SALT',        'tmm:?0[9~aeuxT~.c9zJ+G^{5`]gf.&t#6ua 2`1DIL8qVt YZ~.ssPuJ(,P&VR1' );
define( 'SECURE_AUTH_SALT', ')/UlHkBuKY2S2TsDK+F;kz^5uUlwJ^:QcL)&-f{y /g`vHK)@{!aH7yPHS:6!Vfu' );
define( 'LOGGED_IN_SALT',   '`bM}XyQ/{zZQ%I3w9F$FbKrcaIq|$nF2N`{z{[q?V~6IqPvK-MJC^!bWzd?JIh%9' );
define( 'NONCE_SALT',       '{?=p4gs2ecxlYAZx@BWyjCHpJKH37?hVROS&W{A0I<B[=Kt:@Elg|BQ.Ii^aR/^w' );

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
