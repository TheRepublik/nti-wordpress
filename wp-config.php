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
define('DB_NAME', 'nit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'TH{j#HF2P7%|y4(Y9NEn,9j;&`WnY#M5Fu.`>!sa+J{Nk8KhF!@z9wPl|Er(/6T#');
define('SECURE_AUTH_KEY',  'c7MIHRxpk%_weA6nW94jpQk:-:#SPs|l+?ww8`lp[I}gW<zPCE01Ssx*$V$^dxbW');
define('LOGGED_IN_KEY',    'B+Yj#D89W:t.qDnUg~)E0%J*XL9AiPZAO3aQs((uW3=4YJ32ayhXui.LhF@|?JNo');
define('NONCE_KEY',        'uu.F^f%J8hS9l9Q<=`cq9U!UNw-@ypBURD0l/?m+BO$-jf1A](R/x@JrA,W(VYKM');
define('AUTH_SALT',        'J^M-+<7,* Xa.qM{fruZ:e_x1!]&X8Way,(aaK_c]eI}l2F!v k`bHdB$+35zob~');
define('SECURE_AUTH_SALT', 'tFXRC>*I%E:((*~X6,-R*V b9FX<0oJs~ZhhQ}{jqj*R@0!f20gL93y|Em%,G_gd');
define('LOGGED_IN_SALT',   'YNv<GSsji;SxN,w/=d,-QcM *X^dY+X2}+m^z%|{brip }}@,nVOw8I~yfA1:Kz!');
define('NONCE_SALT',       'CY2,ib[SNmU+jIW]g~roo&7>[j{+{H4J]+^jkl1cOsH`sr8v[4ZZ]&2URUi7L8Gt');

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
