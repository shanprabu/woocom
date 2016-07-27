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
define('DB_NAME', 'woocom');

/** MySQL database username */
define('DB_USER', 'web');

/** MySQL database password */
define('DB_PASSWORD', 'websa');

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
define('AUTH_KEY',         'dXXL^WIeqj`Typ69bNW%g_[i/$s?3o%XZzH,9|j[NE/7dWrWK&PiaA,YY#Z_^#Q|');
define('SECURE_AUTH_KEY',  'v[GNpLfVZ1V&$ @Gj6NRQ(ZQL%2:$##5t*?hp2b3IM/a@e bc)(l:X/*)A!ymbVL');
define('LOGGED_IN_KEY',    'LwA-~i}f)p(D(Mp]SBaD[f4&vHW|td$I*x8m<r;teD~!Y>QO:;u~_d<tVCDaD)og');
define('NONCE_KEY',        'M!/,*2yS;evnlH*S)fI^G_S+@Rk(R~q(o=jrhb0b1l#VSrJIr7U)G9_hnM4B*KYH');
define('AUTH_SALT',        'twBu<f8G}&abcp{Kq)K/95d.dm`Fu0z6Ex|+}.gF{tLWB4x:DhkM8El3M*m]#/Q%');
define('SECURE_AUTH_SALT', 'n80mN$~kW!B0.I[HPI4fTD?>BkQ@Cf52g{!dJ6**URG3al8jOKl)rs=./1pOz3s}');
define('LOGGED_IN_SALT',   'me6S{<f+VsA>H}sgHI+fYMaJNT6@,T,7C}h=OtW=.0Eo7pxrS&7u%WJ?Zo+%3uWO');
define('NONCE_SALT',       '+-Hjc~m tT3-RSnee}s]&z1-Ux~:T}PZa^[Nc#$D(=_uAe2G7Hm`GRh5|BVbe4o6');

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

