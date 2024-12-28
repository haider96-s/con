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
define( 'DB_NAME', 'hilla2' );

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
define( 'AUTH_KEY',         'O81-Dg-r^ :fo7MQ1;Rk}h:nCC6GixIYH$71zlpF==Gls[;qUVQv?Xz[WE*>pS?L' );
define( 'SECURE_AUTH_KEY',  'e+~G4`Xt5_u4XfVR&<7?1(_gKO^M& 3$8()Wz>!Q:O1[b*2<^k[M80~4 8_GduO{' );
define( 'LOGGED_IN_KEY',    'D0fKzK{zu{`+j=oMVn#=>jKa_(O ]LY{amdZh(Wbi=!JhzIR?^F(yNWTrpOC$4?.' );
define( 'NONCE_KEY',        'bdD?<R)trRr#@iVt)rH2NxgN6KX2CAq%P&*gMN]_AghgJq<g{mDi*Dr%DE+P5.@A' );
define( 'AUTH_SALT',        'RuF$<r>LT{1?@;sR$GAM19TPgw!pJm(wtXQpSct,XddBfQ^WJ>ZED6}^DmN`<8od' );
define( 'SECURE_AUTH_SALT', 'Y.;2&;3nA^sz|pS8r=r##xt|CQbttgyQKL~R~G@QM0-h?$FzChV;f?#<[VND5UDq' );
define( 'LOGGED_IN_SALT',   '1gqu}~v&]*t:zU j~yMV&NW^_E+)oBJ)QBgg48@YR)F@3u0ot7@P|NbF]su7-WEK' );
define( 'NONCE_SALT',       'r+RfO2L<f63dN{qpEhjBZ`7HYCH wv4A+|~Td=5N_5Lv{k}$]DJEs1;,vb(]]/C5' );

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
