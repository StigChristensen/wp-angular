<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wpang');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '/:nn<v8C2+i+XwWri1)3Ul>nh-Q>4@tuEFMP2 _6o6|gwuC6y|ak;q+O)DZ;m|`b');
define('SECURE_AUTH_KEY',  'Gq>[hQy0Yyw$HRz;&56a97B,PT-+7H,4)L~bCo&YoNro174N.4cE2<)i!C/H/+EK');
define('LOGGED_IN_KEY',    'yyt;ggn,rZJ[*/p=XM9oFx#uMOO}-4OS{TW_R{|Ry,7N4mje.Q1U%eWG~NS/2wyA');
define('NONCE_KEY',        'D|9us#P#(,As:N|BFQ|6tT4ZlZo4|Rfm.5__>WK.9NF2TF8i1.8T3LUW2$.52.xb');
define('AUTH_SALT',        'T_<!}&?EFh1Y&ChIOPh4-lEwh.+W(=+y_-<m<O _i6-^=k|@MC-`#n|J_l^w[WT,');
define('SECURE_AUTH_SALT', 'g=kP$M21UY?Bq[r*t;$/Vd2g|8,|Dzoc 1-dCq7J2wj?])A]AA6o9}NeU).VJ;7c');
define('LOGGED_IN_SALT',   '-;R1QP{lsa+U<.4.GCCW[?@tO|wJkQbLUjezTd/ZVEC;RsLG_{!#aL<%4y+R|7NV');
define('NONCE_SALT',       'i&sQ|-PhwFoWkp(aiSlxZ|rX.ku82Rd6mo5;OC7v`|TUhbS~0jC[gI#f[,K+/RiQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
