<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'adriannamateo_wp');

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
define('AUTH_KEY',         'GZ/-Z~(9JBDA+,UJ>aUTEI9vR]?[DVl3Dum6|B6q&Uv{15k?/Q_?L8wlx4w/) 8#');
define('SECURE_AUTH_KEY',  'w1,3M77]JtDyc:UW+|}F>]yFzncYFl)%_,6j-EH(SZH26!e/uMXrL`ov9^f|rb8s');
define('LOGGED_IN_KEY',    '$:g$l4hF`I:|WrA/xvp^G$0=E|BjX?U]NNaGS2-|XV5znm+0$2KvDqW S+fW;$T4');
define('NONCE_KEY',        '@Q~/|-3QoN9go_ut,?PmD2%Y(Ef[P+)&K].t{/Xq?(AZa6[E-xml6(S$Hm$bh]ix');
define('AUTH_SALT',        'd;Nj+~|VL6KVMy$Ah!9Cs+KG9RqB.te3p+C|y$Mt<|I{OiC;1&xo+gy_%54U7jt`');
define('SECURE_AUTH_SALT', '?Ry]|6;83e3}{SKK%qn!sA3K0xu8O+9+H} QW>;%!q1~bR|g1e=f;+OCH:nI!CrW');
define('LOGGED_IN_SALT',   'cW%<p>m/;?V-/fE0-9EQG$*a?ty)c~f2Qn@X+|%2RS?b-?y+`veAEMA>_bPzKTAH');
define('NONCE_SALT',       'd{FTGO;-}jrQM*JDTR:z{(hUi]|l`qrCEDgM|ng#V<%l`B/`6~-}XWX#W0Lo;;^B');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
