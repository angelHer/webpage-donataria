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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web_donataria' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8081' );

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
define( 'AUTH_KEY',         '[=|EVai9Uc(ruOGZe0 kbq(Ihe%%A;+PdDbIyV_b!^<6;!IuoHXw{lEp2|HuV>rn' );
define( 'SECURE_AUTH_KEY',  '#gRCpm0zNN)[kP]_v)IFlc4(y>Kw;6O B!+O@+/[oMX[<k9dU|Zk4<BvRUVKTW`4' );
define( 'LOGGED_IN_KEY',    'Rp9/C#kT^^kKZT{:bAvYaRz>0l>s]u5_Na&;I5Sv||r?2qNvhM9~1|K4K h{F* B' );
define( 'NONCE_KEY',        'M:Qq2lDKH/`[QD)FhIm5uv53?cttTdy*moln[{nma-9L!~iH*`<Ta:- </gy&o]?' );
define( 'AUTH_SALT',        'AmeA?HzEy_jR#!4Vyt]jLrp}x$u};iox~aJMl/e<tTqp)d( ~BXIA16gOilZg<NE' );
define( 'SECURE_AUTH_SALT', ')4O4gpVe.9+rNI4fhl&d$;N]zl|R$7}jW|^yq2`?k<N3,{oG7Id;&>bD4xE,b(F]' );
define( 'LOGGED_IN_SALT',   'wdy1&hlN*h[b/L9{=9m,M)7ch1h;uk6oqUD/1O,XB!$deOwQtb/F$2j79fnm!(yO' );
define( 'NONCE_SALT',       'jt+yb,A/Bxpax&=7Oz:+$ksxD~WRS2Ha.gTsA%+0kFIHI4JP$Y8tH%dL1ywsy,i2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define('FS_METHOD', 'direct');



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
