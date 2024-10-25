<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'HobbyWebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'HqQ4RWy9TThDQX6ZUPCMTMjCkpAAHYB3CsJ91Ey4xAaYWah8TV2FEfG6AkNlgRh4' );
define( 'SECURE_AUTH_KEY',  'gV5fIzIAu5vi9IRkVRFJTk2jSGHEsjOZmZl1X7f2d9mVHXuQRO5mzeFOznV4FeLz' );
define( 'LOGGED_IN_KEY',    'a19YcDbCXsuqfRIAun6UNwm2W6pzHp1JqkF5AOSsPbCSIHh30Rv5kCc7qk3bEq0T' );
define( 'NONCE_KEY',        'T7ahiNAn7V8ZKIa6lrbRQuaAZFr1ehb81KM2RTm0q5LpeQOvNO3VCOAgNHszvgcs' );
define( 'AUTH_SALT',        'BcbAnYZ0fnKxeyDAcuhPSrY03fusL0nvBaTY9YQR2YTWKZmZsLzNV1Zqa5RYm8f1' );
define( 'SECURE_AUTH_SALT', 'itQP5uyIkbYvXaRsB0PpLwcSVHJjPOTaL7Op179sDvvTPn2laSsbiQGeh1DzxeVW' );
define( 'LOGGED_IN_SALT',   'aIzt0TawKVy4i8u6HfHdxQXJNYGECHpbqXWWgSALfcfhqlWqw5fq0RwaTw9UQHUD' );
define( 'NONCE_SALT',       'iB3Hqux3AVimNNYHpBZZuapq2kRC3dgZnGHBFaA3SJ0fmrSsm5csiMSVrwBzCWZm' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
