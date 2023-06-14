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
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'QdFwDtTLtAsSxi/KaiTjc16zaF2zPEOwGXGWpCD7ImbY7SSTNPft5JRC0LRwD/cbH6ANd22LHPv0pEV0zBgTrg==');
define('SECURE_AUTH_KEY',  '+/Vw9ygjIE3KvSbX3cYfUGd6fw7mG7NpyNnaXmaKa8MOcUkU1Sop/5vxID+8jJzk0i3fCHwMLqqDAJcnW6emzA==');
define('LOGGED_IN_KEY',    'zldhCYNklR10KvNdrdOw/4DL4DIquq8NuQN8PX2eYMEQSDrGUxwXPegVe5FUKDdj9kjsPB10C0ZLSb4O9tSDmQ==');
define('NONCE_KEY',        'EWzlbVbIMQa9QmkNBsmUZgZ3mBaZ/WpjWfhto2rRCDR69o5bd5UrZ06e6uafaEQbQjgL62WN+SoIOESMPqbx6g==');
define('AUTH_SALT',        'u0ktW/QjhPj4wFV2LoLhNI2Jgto5bZ2D6DggI6O3tMNtdp60yI3fwjOdYCy2/SqLct8cgYjhMpg0EgsZfYcCkg==');
define('SECURE_AUTH_SALT', 'oPsbpo2QeM7NYElpAPn5poUf0P0gfnAfvaQn/YylTInay8rtWQkBm5x/yi4SFudl+LJFvRYO6C+2zXElC91LwQ==');
define('LOGGED_IN_SALT',   'o6mTne0iQhjh0cxLMeXeqej65UTqjg/b3iRyj28+fPmPZRs9a7gabf5Q5gUqfU4qLy1fxR4YqBC3cTqWG4KFpw==');
define('NONCE_SALT',       'xX4sTYaeuKpdtbNwYCI7wQs/WkQz49xC8SPv9J84l/He0k+RjGvHedRx1DWO9tkyzTPDS3ybAqHNywWlPNZv8w==');


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
