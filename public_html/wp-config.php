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
define('DB_NAME', 'vay9dd78_vayvon');

/** MySQL database username */
define('DB_USER', 'vay9dd78_data');

/** MySQL database password */
define('DB_PASSWORD', 'langtu123');

/** MySQL hostname */
define('DB_HOST', 'db06.serverhosting.vn');

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
define('AUTH_KEY',         'cqPIjuLD1We2UOt;*+{58Cs_d3cY}d<_U)@Xskyj*k~o|Ch`{o]|xvk|5h4y*(o0');
define('SECURE_AUTH_KEY',  'P!!j@oZ!).s[)7~`[rM_I^2j.,3S~*%4l9dJ.~Ju*rmG/i~YC=&N+^e90$d&z+p0');
define('LOGGED_IN_KEY',    '3ez,|t6Tnamm)/IBT3!-RDn1Jg7|(CWm%4sm|ks(<3XcRB=t^ @8D$inrn`b|ZL8');
define('NONCE_KEY',        '`[b<[.p/7Ur~[Zc)CfT2BkQ~EOJkg Zk$5kW--Mp.%F(Z8mC9DkzOHe&/%V]ydI3');
define('AUTH_SALT',        '2NOs!tlEYNGAr7-& ?FK?cdW*p1QY(Hp=eNJ, y%U9&]&#+n+=G7pK|AG]dnf)=#');
define('SECURE_AUTH_SALT', '?~>GZiC][@v`S#]exu2]mA%]+kC02)$]8mu[/>k-w0kwaif3?k/U/0v_v;=E8bQU');
define('LOGGED_IN_SALT',   ',7$:E&HXmAKC7|o-l{IKchh#36b!=uzAG0|Qu:]g^;2#0A[E%T4]?vr-8k[>&apG');
define('NONCE_SALT',       '8k[z%)};tr%RRD!y2oxJJR9K4+Z[;m]~Mq|~jxV[oNP_?O[MsQjcuGsK]2g}PdwT');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
