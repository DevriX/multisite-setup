<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/**
 * Don't edit this file directly, instead, create a local-config.php file and add your database
 * settings and defines in there. This file contains the production settings
 */
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
    include( dirname( __FILE__ ) . '/wp-config-local.php' );
    define( 'DX_DEV', true );   
}
 
/**
 *  Production settings.
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
if ( ! defined( 'DB_NAME' ) ) {
    define( 'DB_NAME', '' );
}
/** MySQL database username */
if ( ! defined( 'DB_USER' ) ) {
    define( 'DB_USER', '' );
}
/** MySQL database password */
if ( ! defined( 'DB_PASSWORD' ) ) {
	define( 'DB_PASSWORD', '' );	
}
/** MySQL hostname */
if ( ! defined( 'DB_HOST' ) ) {
	define( 'DB_HOST', 'localhost' );
}
/** Database Charset to use in creating database tables. */
if ( ! defined( 'DB_CHARSET' ) ) {
	define('DB_CHARSET', 'utf8mb4');	
}
/** The Database Collate type. Don't change this if in doubt. */
if ( ! defined( 'DB_COLLATE' ) ) {
    define( 'DB_COLLATE', '' );
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
if ( ! defined( 'AUTH_KEY' ) )
	define( 'AUTH_KEY', '' );
}
if ( ! defined( 'SECURE_AUTH_KEY' ) )
	define( 'SECURE_AUTH_KEY',  '' );
}
if ( ! defined( 'LOGGED_IN_KEY' ) )
	define( 'LOGGED_IN_KEY', '' );
}
if ( ! defined( 'NONCE_KEY' ) )
	define( 'NONCE_KEY', '' );
}
if ( ! defined( 'AUTH_SALT' ) )
	define( 'AUTH_SALT', '' );
}
if ( ! defined( 'SECURE_AUTH_SALT' ) )
	define( 'SECURE_AUTH_SALT', '' );
}
if ( ! defined( 'LOGGED_IN_SALT' ) )
	define( 'LOGGED_IN_SALT', '' );
}
if ( ! defined( 'NONCE_SALT' ) )
	define( 'NONCE_SALT', '' );
}

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
if ( empty( $table_prefix ) ) {
    $table_prefix  = 'wp_';
}

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if ( ! defined( 'WP_DEBUG' ) ) {
    define('WP_DEBUG', false);
}

/* Multisite */
/*
 * Remove the comment when you setup the multisite!
 
if ( ! defined( 'WP_ALLOW_MULTISITE' ) ) {
    define( 'WP_ALLOW_MULTISITE', false );
}

if ( ! defined( 'MULTISITE' ) ) {
    define( 'MULTISITE', false );
}

if ( ! defined( 'SUBDOMAIN_INSTALL' ) ) {
    define( 'SUBDOMAIN_INSTALL', false );    
} 

if ( ! defined( 'DOMAIN_CURRENT_SITE' ) ) {
    define( 'DOMAIN_CURRENT_SITE', '' );
}

if ( ! defined( 'PATH_CURRENT_SITE' )) {
    define( 'PATH_CURRENT_SITE', '/' );
}
    
if ( ! defined( 'SITE_ID_CURRENT_SITE' )) {
    define( 'SITE_ID_CURRENT_SITE', 1 );
}

if ( ! defined( 'BLOG_ID_CURRENT_SITE' ) ) {
    define( 'BLOG_ID_CURRENT_SITE', 1 );
}
*
*/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
