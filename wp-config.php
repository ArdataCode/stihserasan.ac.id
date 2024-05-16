<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websit19_stihserasan' );

/** Database username */
define( 'DB_USER', 'websit19_stihserasan' );

/** Database password */
define( 'DB_PASSWORD', 'Ardata2024!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'mmvk5e252lcuyco8z6bvxcchyqm69ln39psvptiwqquq7bufsube8sll6c5qzewr' );
define( 'SECURE_AUTH_KEY',  'igv99fgro98qjkkjokt3nmaxo7calxgeaqpp9bccy11zxwl0qfict1dnrbzxehpe' );
define( 'LOGGED_IN_KEY',    '4jmpiqgtvdoflik4q8otnwzijtd8adujgvx87cv5xidf8bqliaozuqv41pr1mxvi' );
define( 'NONCE_KEY',        'y2yzjtfitgbgqs3r5r8lauhkrvo5mqs3ohjdhuikruyifxdr0rsbv8cibu4tmgye' );
define( 'AUTH_SALT',        't9ub7xnvsqmbwxa5vjidomchsdg38zdhs0crkvnnpeqzmgj7wrpovwkgul9gr7zf' );
define( 'SECURE_AUTH_SALT', 'piaicy0xc5vxtdyq0fu1pcfz6kwoemdxklylwg8eftajtqqxta1x5e0zybbszaki' );
define( 'LOGGED_IN_SALT',   'aywjo4vuot5zaj8djxca3n7x1acdjsj42igffzaihhifkozngl3s83adub0mqvhn' );
define( 'NONCE_SALT',       'dlulrvg0bc0nguw3psylwdauecqzcl57nvqgt8v6sigz1zzeandhagvbxem8mleo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpao_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
