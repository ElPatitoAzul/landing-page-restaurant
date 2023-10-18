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
define( 'DB_NAME', 'poots' );

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
define( 'AUTH_KEY',         'bQX+$#m1oiW9qS@EW=3(H)B%cCj]gE*)i7W)6#X5(YwDHH Z.gV`q`Af,-Lr4YTB' );
define( 'SECURE_AUTH_KEY',  '~o6*KVEOcC-)zF/yW}W5]~F2Naw#_6U}G;d)[btv6du$bg(AD1y TrtBOWIDn@]x' );
define( 'LOGGED_IN_KEY',    ':_1!TCRc$b#&#l/2,d%b$vB+ivsF9uyqmLE:zbHSdh+Q<e{U=e?~:d?u A76f.8&' );
define( 'NONCE_KEY',        'ZX:&!~uSg,DxsxG0s>38Q<-3Ge{AHk!c~I{f6al5]wf|CGsNkR%$V-7ZtsO&/:qz' );
define( 'AUTH_SALT',        'R^2+A_u+e_C;!Tj$0~$:`a.;WWJ>t=.A3u!ngI*m/-6GcK#I4>w0n35QaYf[zbX$' );
define( 'SECURE_AUTH_SALT', 'nh-$p/@zQ:}Ac)@240@6$}{?H #D6l1@.gwtha=9sJ<$Vt-JT0uy2S`TO$?<HTnA' );
define( 'LOGGED_IN_SALT',   'F{m9qSR{Tp2t=!HsT@,7zit2]1~+u]%y(-^6~+d2j%ND_Z=s^=mF<A)i]l[/w/^m' );
define( 'NONCE_SALT',       'O:;gz5}KiFa#s8g;W)sE!b|>1~Lr(<<QKnm~AA/ rx`uOHTdmV lIpR;G0b4 CH(' );

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
