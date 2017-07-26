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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dboMwM8AkAy6' );

/** MySQL database username */
define( 'DB_USER', 'KtUs0nCZfE' );

/** MySQL database password */
define( 'DB_PASSWORD', 'HBObmkL4No' );

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

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/*
 * IMPORTANT
 * THIS IS NOT A STANDARD WP-CONFIG FILE
 * CHANGES SHOULD GO IN my-config.php
 * /var/www/vhosts/staging.celticdublin.com/httpdocs/my-config.php
 * DO NOT EDIT THIS FILE, IT WILL BE OVERRIDEN
 * https://www.34sp.com/kb/128/wordpress-hosting-file-structure
 *
 */

define('AUTH_KEY',         'c771af196ac651817932ea9a0b237e2c');
define('SECURE_AUTH_KEY',  '7f04869175c1e692278f82ee61baeb8c');
define('LOGGED_IN_KEY',    'ac4cf530f031976d06ecc950e9396a27');
define('NONCE_KEY',        '043733046d92604c593992f9b394bfae');
define('AUTH_SALT',        'dcfc760897e207810ca68e2896f5e5c8');
define('SECURE_AUTH_SALT', 'f3192c43e6edd39009585f75dcae07c3');
define('LOGGED_IN_SALT',   'c2973f72db309e9e2ba7e5ba5209b92a');
define('NONCE_SALT',       '12a1edfa1569b950dda5c11bc6403d5c');

define('WP_CACHE', true);
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    define('FORCE_SSL_ADMIN', true);
    $_SERVER['HTTPS'] = 'on';
}
//Disable WordPress trying to update itself
define( 'WP_AUTO_UPDATE_CORE', false );

define('FS_METHOD', 'direct');
define( 'DISALLOW_FILE_EDIT', true );
define('WP_CONTENT_DIR', '/var/www/vhosts/staging.celticdublin.com/httpdocs/wp-content');
define('WP_CACHE_KEY_SALT', '3b1ba48becf7d7ca077a32aefa7baada');

require_once('/var/www/vhosts/staging.celticdublin.com/httpdocs/my-config.php');

if(!defined('DISABLE_WP_CRON')) {
    define('DISABLE_WP_CRON', true);
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
