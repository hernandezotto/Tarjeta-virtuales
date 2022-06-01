<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Tarjeta-virtuales' );

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
define( 'AUTH_KEY',         '5UBeUhLL3prqq8uChVpby09cHO7zuJeiMNvhJ2VCQ1cPH2oJwAoCDlZ3DRLkShiM' );
define( 'SECURE_AUTH_KEY',  '0F9SeYpEyJnKgyUN2MVAdPZHIPCMp8h03QWlP1FA1AzwcveDoEcYOhrqPpEtaZNf' );
define( 'LOGGED_IN_KEY',    'h5mElYKXcm6gErNeFrxJbf2U58H0fUFt8RNrITNNaTZnxwOM0pihOWgvwOMdQ05Y' );
define( 'NONCE_KEY',        'lPUiFGoQIG1AuTdpph49RVSo68dnahIknTfvOSxLktn53ZDH3t6DZSITIlFm0Szr' );
define( 'AUTH_SALT',        'sqN1n3SWiEjv6yRdBx9UFsjKggwaxSrU4qT5jOtRupglXekIRnxs5aQDajbi0jsx' );
define( 'SECURE_AUTH_SALT', 'CFmRTG4tZWqBfEYhHBiqMLVOMHo8ORuWxUWGBDMbF5dLI1NZyZifZbm660VPvc8S' );
define( 'LOGGED_IN_SALT',   'QzBRcCUpMxjUVcyzGuAFbNJACnOe1fSrRnpkFkuLQqbkij1v9ilYIVffwQUVfwyu' );
define( 'NONCE_SALT',       '99xZjRsLGsZoaaB8AbYFSAH5NlNv74Bn1Ph1xTAA2wd3I0XfziGEhow7qp9CmiLm' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
