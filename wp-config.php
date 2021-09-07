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
define( 'DB_NAME', 'wp_logistic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '}+}-O_^u>2ZH^:BtK{SA&>FXwC.V[@`kE3Rb(5dD(6Us=c^Tgecp!OcVS5E4A}:C' );
define( 'SECURE_AUTH_KEY',  '=QMWE}HJ-$l;? Pvvw%<o7X/OLupO0+58)a]0gFzOQtTT{OA#6xdseU!~/pB&Et9' );
define( 'LOGGED_IN_KEY',    '&m}{$<eM!pAL#*d`EC%4ac:mXZ<-m}?Q87@%&|7T)kjX-AyMu2,wi S@e5RZ=ey+' );
define( 'NONCE_KEY',        'uP,<wxkDvUx(fP7 t)%BMInn?<^)abqQt7^[Atd@m_:OZTd<]fabtu1+QBWn:aH%' );
define( 'AUTH_SALT',        '/E%AnaSI6p89TW0*{LA3rJkS;{&=y<yCUdg9&XGkx&n4a$hNV61=#BYHh,Xv#%5u' );
define( 'SECURE_AUTH_SALT', ',lj.D{`xeVuSG,u<Q~!ls`~v{ds).V94wzD>zqj:x/kOz81(o E@%aKrSz/8e/I5' );
define( 'LOGGED_IN_SALT',   '{DF9VKLDT8so{lztk.N:xXD5G-r3=7>w_,:^/lI6hr+qsb/MRei#u}GH;:?f.-O0' );
define( 'NONCE_SALT',       '@k/#Tb;*CTKK;/8iN]Z4[Gn8go[4.&gJ6h=Y{]?5+;@ofO^y0?NG!CdeIJK&8nRX' );

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
