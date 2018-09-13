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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sockshop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rty89(jk');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IBG1mssCgOC6|)v.D$>hT?@q;a0;HWR1Et}omY<pA.`rWV%wC9Du0:ChWxHI+wCX');
define('SECURE_AUTH_KEY',  'oKe }j9Sp0!54$SiiJs .ytkx0M-IH#MjvnPUv_;cb#Rgh%ht`]~S%:.@_TK 8a/');
define('LOGGED_IN_KEY',    '+/]0@E,:(>`&g9RUiNSt]a=&+U +Ln^S(k@E_~50G71FYA#sds;vWD.>TY)]p`9i');
define('NONCE_KEY',        '~:/?0C7=0B.<3Zf`49X}3VcX8PZ9sXHZ$3r.7<$`0WwlHKXL5:Vt+&!xJ#HLNrO5');
define('AUTH_SALT',        ';h:v$+&[35MAL$3(qAmZ(_/+),N dH8i_yT(b^9:0w4JV=Up^w0vd;ZUit;6)xQ2');
define('SECURE_AUTH_SALT', '`wJvLNnTqM6^)Tspqv=xE5`q+-XgQE3}PfsP^@J1.Pv(].M1n 4TvH<7`q?7:E{4');
define('LOGGED_IN_SALT',   '8/9C+ET^@1!s%5HEa*-mQN`g(B-)9%VYl UPRv,02VnP-,,gooNth%S)+^3nRxdn');
define('NONCE_SALT',       '8hxb1s($;gOacjn(%[V6CVypQs2{ p;;7`:h)(O|<uPnB~BfUl;_*aO(2j)t,Y<f');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
