<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zJ0Bch/2A7p6uVeoMbFavbmtRzNbAYFJ1G3/qKgP1Z0ztQxiCJNV7HfmO/SShngpR2gzmqqK6lyMNzfiGBiOmQ==');
define('SECURE_AUTH_KEY',  'UE1LxxDz8s2C6iHDirthrUkLhkyJDsQLJs++lcWi7JBW+PS+4JUOctoeJRLoH6suu5cpWynF3r2czbk/mgIjzQ==');
define('LOGGED_IN_KEY',    'b0eAHwF6NHdzYfbqmPsobilmKRecUwl2LTnF2SnUShoT0WXzqpCRGEC+waGSRaqUTEV9SEwKSk5aG0T6zSJ5QA==');
define('NONCE_KEY',        'c34wXTqP/ENERRbfnkkRFZsIi4jxchWzIq3zP9QVHAZEIw96l+G/RVjGrLvDzzBnTnfHKCOp3i59loJg666fUg==');
define('AUTH_SALT',        'V6NCB8MSXklfM8AqqjEQR51h+dD7T33w+N8l+dY1l1lSDMuWJmdSqYW0ps5ETplUroUb0tgKg3mHgoBRRcwXUA==');
define('SECURE_AUTH_SALT', 'Fta0plRpf0Gpd0oT5XsLUzQsEG977HaMs3rg465zFTO/Y4CuKCGF8R0La2Qvnh6zubk2dAG2Zngt9n+CdY/02A==');
define('LOGGED_IN_SALT',   'rK3t9lIEd8lA/4+ub4AvAowd2GByax7raXchK/5MNSD2poYCL2PLdhxwn0r7jrJFQoeJ1Cuz4/YYpATtBa0l+Q==');
define('NONCE_SALT',       'iet/U9/EhPjoaArQudzemU3i8bT0nzsvFIheVu3OVwL1FSgc5Rm48OERLJ9Cpr25g9AbcoCmEv0QMBT+LJHbrg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
