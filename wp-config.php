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
define('DB_NAME', 'u607205688_xm');

/** MySQL database username */
define('DB_USER', 'u607205688_xm');

/** MySQL database password */
define('DB_PASSWORD', 'luannguyen321');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'oygpIXqIMUQHwY8aRGm3wHolNhr2jgCQXpsejTSCaGZyTucvcBUEQSQdy8xZZ67O');
define('SECURE_AUTH_KEY',  'Z4UDO81DMStjNlmj1iqZx4epZ5iPw1tcCTNiDb33eGALWm1AvdLoaV6z2KzMYcDn');
define('LOGGED_IN_KEY',    '6xJQhd9d9mp5QiqCJ8Rgd3VNXB0jOwmPC18Wvirpu166hiBnzPUTxm0zZFXArMFr');
define('NONCE_KEY',        'kPVIFe6Tcyj2zYSPgGNMn2cVQg2Nmd84RV4PrhWcmzBfS6JyUY6qiFFz1lQWAhJl');
define('AUTH_SALT',        'AsK2Bsz39cEc7cUSz3LCsb0sDU0xtmqj3Gnd6dv1bgGn0LlMf2LS0AySLbRPESA4');
define('SECURE_AUTH_SALT', 'v5HHBIVLjCM6O4MHf36Z3BHGh7mnh6FVoXi7BKrYHsnK2u9Xii6J5COhMZ8A41oF');
define('LOGGED_IN_SALT',   'P6qGykXZ3G0n9M2XrNRT3S4sFd2okErhN3SRTBUTh8wagVFMCIUMD8R1QCQkdnM4');
define('NONCE_SALT',       'HA306D6FCCl8hN8PM3xrIL81DAuo18xdQCRZcoHGdcyGys6mz1Wto65PQEAFRrAr');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0777);define('FS_CHMOD_FILE',0666);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
