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
define('DB_NAME', 'wp_isidore');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!7@l51.Q&4qb28](Y6*EpROT5_L5=s8r-y{Qj(Tmk%*#<,8AP0Dps(4ZF(4]5AwK');
define('SECURE_AUTH_KEY',  '&vt},fA4_4}KC~0-*ky3p}*8i>YHeVp)uK6S1Z+5veX<|=LXC-Opj6LihzEG+TT_');
define('LOGGED_IN_KEY',    'xC/;EcYqe-x(^y83:Uwuz_~*+WdX9Xz6$W8d#(RzFzuvL[~iBqNn8Jf21 i>Z@Yb');
define('NONCE_KEY',        'b>1hq>,/|dKJqrIA7AFy~R%4,4@D{TB[lG,Xps6x75^y 3jmK@&}jh`jA|Q4A>~!');
define('AUTH_SALT',        '*z$](N=P{k,e$A_hHg4X!lnTY86gl%ed7ipUA2U!}6T|F 7VjNmY*#ua9Fjj||i$');
define('SECURE_AUTH_SALT', 'Cv(Rf!K}G*]kha1q^ZBAe$h,J||F%M8Y;H5ReQ)kW2`;Q7y{rmZ(g;2LNMZ)-6Q8');
define('LOGGED_IN_SALT',   ' upfOJG]$g.p0MbVWpqlh5cMX=6`yFMZd>|lVb-X$SLPFMLeu:jaW1DM+A<>MHnl');
define('NONCE_SALT',       'hU;Q2E=FD_|CwZQb2pg`jRp?i ^a?v(pPYt^kBCmZSnLG[<IlVLfHY`6%zTbm.*p');

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
