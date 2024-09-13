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
define( 'DB_NAME', 'sab' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'JfKh3ICmKnZ^-KQ7bP7J1Q}tf)xA AG,ECuXGCf~p`]pG=j-?!~:aQD1lM_DSGNb' );
define( 'SECURE_AUTH_KEY',  'MarPZ*UJo^!%1%ak:GvKGgHaP16`Xpc`mIVeGL23N|@p.@~=tlX8na[[0z1lto&G' );
define( 'LOGGED_IN_KEY',    'j7iRAL(;Lui[~TRK~|#Yf1zNqafah{Hdz3jH6r}x#IS[X//AN01uWrMj%l{%qVyH' );
define( 'NONCE_KEY',        '$A-jqv,z.uCG-bV98?B$>itu0~h]&=YTs74i`?n+l8v?+5Jw7;3|=B@1>kcBv:)H' );
define( 'AUTH_SALT',        'd=Zm]M(T(=Nmf6frJOKuY7uH|v<9Y_5Ob-^w7e+d~A`aTwJ}M)=6?!:V1+eN~&n<' );
define( 'SECURE_AUTH_SALT', '*tZr:76=Y`Sj8>czZw*ig3k$B2}XsO$xMMAq{Bx7D-3IQgoC&/Ik}Z*4B!G(]u];' );
define( 'LOGGED_IN_SALT',   'yVLvwJEw77r_0[H<tmV*KfF37<pk[COj*v26p<-Y%MVI_y%&(qC]5aR^v,!r{E9N' );
define( 'NONCE_SALT',       '#!yVEsCb9teoGg/qml!.hD,|W}Ms.>>3cS[GWK,`ws,E2[4mmE;{hs=y!RJ?ZBVo' );

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
