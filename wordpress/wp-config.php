<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RcLS3pfH-CK$D02,+S.;JU;ZT]-KUh^06nbR_r>;LhiRYw-e@d.8o4NXLH#HmRgQ' );
define( 'SECURE_AUTH_KEY',  'FVYx+rVhtqQVXj~4}i!!<(q),:NC<Rd@h}rG8Z6Du?$(zVumUIQJV8 4@Z=Lb)+.' );
define( 'LOGGED_IN_KEY',    '^}#[t*L/O.E@RIqHC;b>1Rc,[7OJ1?md*A%S_t!p@:RR`+eR#d!j^%X.f)|08dF9' );
define( 'NONCE_KEY',        't?`5_Uo1gV+Jp@5-[DxIecDrG3e61Uy9VKhN_;Z5d{1Tl<s{48(:L|[(v#/ckQp;' );
define( 'AUTH_SALT',        'V)*wr)[Ylg7h*q]|~OQXS.nBoM/e;)0EAXw!Y;!*?+R%(<hvA`>f<D9TbB%cvw0y' );
define( 'SECURE_AUTH_SALT', 'LgRRcJTR7@2^o3_H(-,-f[R0OnDHk NklK$(Cb~${hm}Wl[R${|!}YB.$qtqRu?9' );
define( 'LOGGED_IN_SALT',   'ot4@fKUnNLE]K@~r=oKPUs*x%o$rx[z9CVket,:bOF%qZJsM254[+Jl0 9&VbG]:' );
define( 'NONCE_SALT',       '^BxI}t?QBxZLfZDy,]:sCv-FrO0^ZI8negUW!y6L+s%RIg*jWvn=Prb+|rZlhh|]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
