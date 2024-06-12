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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shopease' );

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
define( 'AUTH_KEY',         '[dy^Fhs^-|?dfjp=vf/;x;G%wAB:^|K9<U<JAQFm,;04~<O ^fqr]a|(d588:DYf' );
define( 'SECURE_AUTH_KEY',  'L3|`c*`}*-g+#&abbECh$pCouwxrJq~XrZBwx`iEJ_Nic5Q)5m`6 `}R RwDdYf1' );
define( 'LOGGED_IN_KEY',    'z!ObmYx<}/zF `s.3R56F{^DA#w,qJJoOZY+VDh|xh~-~rb-.KS-g%79s3SEs,/p' );
define( 'NONCE_KEY',        'K7zR;1 ]N2KhTpB?#u.1SMl442!/~?Y5Ab7dB*8qUrii5dt:#cx<=uzuEOX^>JoZ' );
define( 'AUTH_SALT',        'Ez3W,F2f>0y*wa2sMmP5;Z/w.!@qm@$cqW;J2t8=D!#$O#e9 O0t-j9-skh8Nf=U' );
define( 'SECURE_AUTH_SALT', '*]T|6A(C85CLV;)JTSIpXsTLWD]f[bCBfA1ZU13=/d4>>w;XQ.?yn&bwd}-V&U#M' );
define( 'LOGGED_IN_SALT',   'JtN8VJnQ6c4u5OM/P3Q8Rco$Jsk+)3!@5vGm<jF(y%Z M~frs*]_abPO{&>[HVqA' );
define( 'NONCE_SALT',       'cI<b8?8 HvA-Xw#D*=o)NO@De%ec[80L]$#}8;z5ch>]nXDMC5zq+%N-<P1}/(6T' );

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
