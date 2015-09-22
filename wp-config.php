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
define('DB_NAME', 'wp_suthep');

/** MySQL database username */
define('DB_USER', 'admin');

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
define('AUTH_KEY',         'q8}rsQKI4>YG@(%4Ommzr@h:Z3s=fa.,(`,Wa$1b{.7&?K~(RhJ_|AyxjG=tGR38');
define('SECURE_AUTH_KEY',  'i^2tzc7@%6R6<6[7Q-Ys)Q%&g GLrQ:IZ_Ei+rvGdJ_io~tN4Afy0O37:,OAe_,m');
define('LOGGED_IN_KEY',    'ZG|cz-*KEE-H? S)n3wN6<#UK;Cksh/elxmE052dj5X--4%Psq/>%%66<O7alfT4');
define('NONCE_KEY',        'Z2?73[xRL)r[-|_3Ah<fQU)PI1<E4lQN`dd.e5W|OKo>@1JGtgCIgcZ%y7m0]n}7');
define('AUTH_SALT',        'j8-2wZD^$-mUMkLj)DSB3j:{Q:+yw.h9c-P8it.8jwF5hY/scx7Coq+RiFrf9e,|');
define('SECURE_AUTH_SALT', '*tsnUMN{4V;vwdF*#cJ[:6CG[=Usd@M4U&ThM,5FH5xmmYd=9j*_G&w[;z_RMt5m');
define('LOGGED_IN_SALT',   'g%kUcfd;Ka@;daD5gd;MNpr407d]STCJ@DULRg_/0q8iQ- =2w1;?#@]6vkL75*w');
define('NONCE_SALT',       'k(r$&U/yx#bl%5Qja^V,SL`U<!Qe+S$:8(E6bZm*lL[+bh^qq.bL)#UwB)umPrL6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'stp_';

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


define('FS_METHOD', 'direct');
