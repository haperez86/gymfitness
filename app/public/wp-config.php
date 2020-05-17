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
define('AUTH_KEY',         'zxu5D5Di+MB2FFYnkx2K+1Ja64EMGbnYKrwRn9CzwT5SifT2dVZT87S2uK/+gV12JfUVPm9rceMJGxiV+DglAw==');
define('SECURE_AUTH_KEY',  'qcPj7/YHsXDbZqtVAcqrQHWZz0+tV8uYy23bUtVBNyZCGfX8jArzdK+XUzfVjGj756hNoZ0R60uhRSzyUmjoIw==');
define('LOGGED_IN_KEY',    'hp/mJIvjJq478R9lhlghSU7LpVIppyTd8eyJSJ6ZrsANtuwmmTsMeuNn1KJaEyPKLg+VipHfX7Id//qWSALbzw==');
define('NONCE_KEY',        '78ynu6jDthydtPk9FZFK3Grkzh2obPTjVeBatnb8e1496qFfh23L5kqV3C1PbTNbBIgBIWHCVqVEPnHO9BBeDQ==');
define('AUTH_SALT',        'TACwABVCg1KSRhiauRd1EidAbgih6CVRzn9KnXvOeN491KFa44TkU0pq1AQ9CvuO+/B4LkDN6LgrBEtlySTzGA==');
define('SECURE_AUTH_SALT', '27Z2a9b0adCrjN+151bcv5EfrdRC1m/WaAOvsz45EJSZVJ/7QYFzhiPpBfgWRVAYse8j/VxgATgfzGj8NpWAkw==');
define('LOGGED_IN_SALT',   'rPYOazCEdra8A93NEcNee6t5QKFeCVihZdOopxqbUk/ib3lkLlexYyHMJn8To6rGFKv8ESib23BNqrx+2nxJSQ==');
define('NONCE_SALT',       'wU9KbZP7TmXgD9RD0xMzsmAGTI4i9sjXpX3C0GhgSxhzUjX55mehWKk8RHMYss/Fsha1lj/KZlml3mil7OZEPg==');

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
