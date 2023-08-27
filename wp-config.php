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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '4XVHzew9ZTGZc1N4ob79UeB27VlXAIBN4OqqB3UxM19JrY0zZvAxH53Xccx8N869XuNIrNywiAQ7g4LHhyG0ZQ==');
define('SECURE_AUTH_KEY',  'GUvOdtdMZduVmXXnmNNZgcwKNKNC/657/Nc9WOR1KvzxIkSz4r+M2AZWGkC55CyHopBxV6FMEy2ImxpDNQi4Sw==');
define('LOGGED_IN_KEY',    '1SdMnQUrSLgTngAzjmJBNS6ej8GWlWKYMBXobc5jJZqliSr2/dPv8emLJpVoYp3wzIj1DuVqG9EnM8G5R7MZhw==');
define('NONCE_KEY',        'sE2OqfLKAwOW3mYbySwhVDxppd2/tGPKQR4Cg1rQyK2JwWHW8K5WNCQ8FwOhInNmyeRv8oVyP9g5gQqLoT7A1Q==');
define('AUTH_SALT',        'X+HBh5Cg//y9WxccagSzhyknBf1hhYvKI8XuHSmHq/Wb3kQOHZh2Bmba0vFCPm80jNW6HLCoKHtFwGPR9cExzw==');
define('SECURE_AUTH_SALT', 'r+5tbG/9O8kXVEZz2eReC7dDCBkp5fc5+xN0fU/s22s3BxrsPdXm4OQYJQjZD533/Db5/0ypSraTF3o8gErmpA==');
define('LOGGED_IN_SALT',   'XS7lYpR3qXNDBmdStwmDXh9gYxTr2FEZ9lMk25WmATFHjA6mv4LrS2tDIfHPziuTlo5GelMHII0g/4bdXQyOCg==');
define('NONCE_SALT',       '2rLiYqRl5XSbB6/RwZOpJkQfHCr48B1Rvs8gHilWYnTp8tDdU3Xi4cSgNGOpmhVHFBtPD8ixwz0VTuu4+6iU0A==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
