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
define( 'DB_NAME', 'experement' );

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
define( 'AUTH_KEY',         't65iXb3`[*zLtK:CTWL2JWrk hKi|:9NhDV`Oj1?a}&4lv3t0_n9CfqB.SQ;_ZfZ' );
define( 'SECURE_AUTH_KEY',  'xt*o*cH8*uk|jg#14~ YuXL0p8oVNt!rc:CfshoMJ!t>?D4ekd@l4HQAfNuqs!b`' );
define( 'LOGGED_IN_KEY',    'lCg4*,f5_ov.q)!Q`^)0RqFo@[?vMyv:.@Oo:9}dZc5o.3#<vT &D}pu1(IOm$#k' );
define( 'NONCE_KEY',        'C*}u<Dl}88Ej+P$2bGnCE9Zu`j!,((DDPgb$j Xq8U5t|wMiB-#+lP@uYN]LHcYI' );
define( 'AUTH_SALT',        '^Aoxsr:9t:L [C+%l?(5Nwr6j*W] bOk^j[3o}n;D|,n[6iu2G7`6I,p0O ;Db#P' );
define( 'SECURE_AUTH_SALT', '}:69bL,kQ|S*g(8Q,.wkP@vRlGJ6Gv21d^&IzgnNN%Y`qO/=,1w_8)A!Zlxte|)t' );
define( 'LOGGED_IN_SALT',   '_jUjfNs6:2) 8r2MpX3++lE5F%&^,;ge@i|L8Rr(f80-D6mE6URdJrgOG|0|0@yc' );
define( 'NONCE_SALT',       '/g0VyLLJ}s)W2sd2r!hdjyQ}d?uR~5;NQon8L8OXGS@DN}!w#aZrTut46*VB804+' );

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
