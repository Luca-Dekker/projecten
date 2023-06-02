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
define( 'DB_NAME', 'wordpress_test' );

/** Database username */
define( 'DB_USER', 'luca' );

/** Database password */
define( 'DB_PASSWORD', '79A169b1!' );

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
define( 'AUTH_KEY',         'WJv1j <=/J6n3J$BEG-R8bDUwaI`NIiK%*FYoq7>v.,jP.)kyrXbb-I98-{/2>BA' );
define( 'SECURE_AUTH_KEY',  '78pjWm8SV5M+3II}V#d~qtk}32E^INr[STd^ipXAKn5kkhX}}`)JgO5k@laa*bND' );
define( 'LOGGED_IN_KEY',    'K j;+ey?)/Xh`4pKrG|1S(gYDZv%7vXNp4:Kk,!BAt z&ug%#Uby*:J^8N.*1CYI' );
define( 'NONCE_KEY',        'qS$HWg_.WH}v6{$DuVz*lJ>HJIs(`~],]-N;gG;76(?t`gTtQ?b`voMX#E23dg=P' );
define( 'AUTH_SALT',        '?~nq}pW/6RE&_BS,IFwBDHtV1xZA{K/ap;v,Niyp[hk=)Gtt{bM5V7{|+vdQS@F^' );
define( 'SECURE_AUTH_SALT', 'y4Y7|iz0$AY:^AJdo`7x8q[YJhS2)?0_6@B,*AhBU>Yg~B^~UFt$_+y9ftghhz)(' );
define( 'LOGGED_IN_SALT',   'x^/;F0[gug&{p,gL[4|`]YyVz0-Clct27b$PQa]>)fT;I6yf,YuraJ6=sZr>[eHU' );
define( 'NONCE_SALT',       'RSLd?`&X;=|6Q9s[YW4E~;dR#&i!VYf-[HU#}>%1-|<MX,SYDu3556~TTt 6@y`@' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
